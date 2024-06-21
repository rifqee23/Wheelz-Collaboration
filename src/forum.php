<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <div class="container px-4 py-8 mx-auto">
        <!-- Header -->
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Forum Diskusi</h1>
        </header>

        <!-- Form untuk membuat posting -->
        <div class="">
            <h1><?php echo 'Hi, ' . $_SESSION['user']['nama']; ?></h1>
            <form id="postForm" class="mb-8">
                <textarea id="postContent" rows="4" class="w-full p-4 bg-white rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tulis posting Anda..."></textarea>
                <button type="submit" class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Post</button>
            </form>
        </div>

        <!-- Daftar posting -->
        <div id="postList">
            <!-- List postingan akan ditampilkan di sini -->
        </div>
    </div>

    <!-- JavaScript untuk menangani posting dan komentar -->
    <script>
        const postForm = document.getElementById('postForm');
        const postContent = document.getElementById('postContent');
        const postList = document.getElementById('postList');
        const userId = <?php echo json_encode($_SESSION['user']['id']); ?>;
        const userName = <?php echo json_encode($_SESSION['user']['nama']); ?>;

        async function fetchPosts() {
            const response = await fetch('forum/post.php');
            const posts = await response.json();

            postList.innerHTML = '';
            posts.forEach(post => {
                const postItem = document.createElement('div');
                postItem.classList.add('bg-white', 'p-6', 'rounded-lg', 'shadow-md', 'mb-4');

                const postHTML = `
                    <p class="mb-4 leading-relaxed text-gray-700"><strong>${post.nama}</strong>: ${post.content}</p>
                    <div id="comments-${post.id}" class="comments"></div>
                    <form class="mt-4 commentForm">
                        <textarea class="w-full p-2 bg-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tambahkan komentar..."></textarea>
                        <button type="submit" class="px-3 py-1 mt-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Komentar</button>
                    </form>
                `;

                postItem.innerHTML = postHTML;
                postList.appendChild(postItem);

                // Fetch comments for this post
                fetchComments(post.id);

                // Menangani komentar
                const commentForm = postItem.querySelector('.commentForm');
                commentForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const commentTextarea = commentForm.querySelector('textarea');
                    const commentContent = commentTextarea.value.trim();
                    if (commentContent === '') return;

                    const formData = new FormData();
                    formData.append('post_id', post.id);
                    formData.append('user_id', userId);
                    formData.append('content', commentContent);

                    fetch('forum/comment.php', {
                        method: 'POST',
                        body: formData
                    }).then(() => {
                        fetchComments(post.id);
                        commentTextarea.value = '';
                    }).catch(error => console.error('Error:', error));
                });
            });
        }

        async function fetchComments(postId) {
            const response = await fetch(`forum/comment.php?post_id=${postId}`);
            const comments = await response.json();
            const commentsContainer = document.getElementById(`comments-${postId}`);

            commentsContainer.innerHTML = '';
            comments.forEach(comment => {
                const commentItem = document.createElement('div');
                commentItem.classList.add('bg-gray-100', 'p-3', 'rounded-md', 'mt-2');

                const commentHTML = `<p class="text-gray-800"><strong>${comment.nama}</strong>: ${comment.content}</p>`;
                commentItem.innerHTML = commentHTML;

                commentsContainer.appendChild(commentItem);
            });
        }

        postForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const content = postContent.value.trim();
            if (content === '') return;

            const formData = new FormData();
            formData.append('user_id', userId);
            formData.append('content', content);

            fetch('forum/post.php', {
                method: 'POST',
                body: formData
            }).then(() => {
                postContent.value = '';
                fetchPosts();
            }).catch(error => console.error('Error:', error));
        });

        // Fetch posts on initial load
        fetchPosts();
    </script>
</body>
</html>
