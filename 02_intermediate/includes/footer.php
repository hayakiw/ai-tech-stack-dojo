    <!-- フッター -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-bold mb-4 md:mb-0">AI Tech Stack Dojo 中級編</div>
                <div class="flex space-x-6">
                    <a href="../01_beginner/index.php" class="hover:text-gray-300">初級編</a>
                    <a href="index.php" class="hover:text-gray-300">中級編</a>
                    <a href="../03_advanced/index.php" class="hover:text-gray-300">上級編</a>
                </div>
            </div>
            <div class="text-center mt-8 text-gray-400">
                <p>AIでWebアプリ開発を学ぼう - 中級者向け学習サイト</p>
            </div>
        </div>
    </footer>

    <script>
        // モバイルメニューの開閉
        document.getElementById('menuBtn')?.addEventListener('click', function() {
            document.getElementById('mobileMenu')?.classList.toggle('hidden');
        });
    </script>
</body>
</html>
