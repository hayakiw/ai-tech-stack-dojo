<?php
// ページ設定のデフォルト値
$page_title = $page_title ?? 'AI×Web開発 中級編 | AI Tech Stack';
$current_page = $current_page ?? '';
$extra_styles = $extra_styles ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '../includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a5f 0%, #2d5a87 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
<?php echo $extra_styles; ?>
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- ヘッダー -->
    <header class="gradient-bg text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="../index.php" class="text-2xl font-bold">AI Tech Stack Dojo <span class="text-blue-300">中級編</span></a>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-blue-300<?php echo $current_page === 'home' ? ' font-bold' : ''; ?>">ホーム</a>
                    <a href="requirements.php" class="hover:text-blue-300<?php echo $current_page === 'design' ? ' font-bold' : ''; ?>">設計</a>
                    <a href="docker-intro.php" class="hover:text-blue-300<?php echo $current_page === 'docker' ? ' font-bold' : ''; ?>">Docker</a>
                    <a href="mysql-intro.php" class="hover:text-blue-300<?php echo $current_page === 'mysql' ? ' font-bold' : ''; ?>">MySQL</a>
                    <a href="auth-basics.php" class="hover:text-blue-300<?php echo $current_page === 'auth' ? ' font-bold' : ''; ?>">認証</a>
                    <a href="blog-design.php" class="hover:text-blue-300<?php echo $current_page === 'practice' ? ' font-bold' : ''; ?>">実践</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-blue-300">ホーム</a>
                <a href="requirements.php" class="block py-2 hover:text-blue-300">設計</a>
                <a href="docker-intro.php" class="block py-2 hover:text-blue-300">Docker</a>
                <a href="mysql-intro.php" class="block py-2 hover:text-blue-300">MySQL</a>
                <a href="auth-basics.php" class="block py-2 hover:text-blue-300">認証</a>
                <a href="blog-design.php" class="block py-2 hover:text-blue-300">実践</a>
            </div>
        </nav>
    </header>
