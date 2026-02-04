<?php
// ページ設定のデフォルト値
$page_title = $page_title ?? 'AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = $current_page ?? '';
$extra_styles = $extra_styles ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '.././includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
<?php echo $extra_styles; ?>
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- ヘッダー -->
    <header class="gradient-bg text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="../index.php" class="text-2xl font-bold">AI Tech Stack Dojo</a>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-gray-200<?php echo $current_page === 'home' ? ' font-bold' : ''; ?>">ホーム</a>
                    <a href="web-basics.php" class="hover:text-gray-200<?php echo $current_page === 'basics' ? ' font-bold' : ''; ?>">基礎知識</a>
                    <a href="setup.php" class="hover:text-gray-200<?php echo $current_page === 'setup' ? ' font-bold' : ''; ?>">環境構築</a>
                    <a href="tutorial-setup.php" class="hover:text-gray-200<?php echo $current_page === 'tutorial' ? ' font-bold' : ''; ?>">チュートリアル</a>
                    <a href="errors.php" class="hover:text-gray-200<?php echo $current_page === 'support' ? ' font-bold' : ''; ?>">サポート</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-gray-200">ホーム</a>
                <a href="web-basics.php" class="block py-2 hover:text-gray-200">基礎知識</a>
                <a href="setup.php" class="block py-2 hover:text-gray-200">環境構築</a>
                <a href="tutorial-setup.php" class="block py-2 hover:text-gray-200">チュートリアル</a>
                <a href="errors.php" class="block py-2 hover:text-gray-200">サポート</a>
            </div>
        </nav>
    </header>
