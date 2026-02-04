<?php
// ページ設定のデフォルト値
$page_title = $page_title ?? 'AI×ホームページ制作 | AI Tech Stack';
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
            background: linear-gradient(135deg, #ea580c 0%, #f59e0b 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #f97316 0%, #fbbf24 100%);
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
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-orange-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×ホームページ制作</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-orange-200<?php echo $current_page === 'home' ? ' font-bold' : ''; ?>">ホーム</a>
                    <a href="html-basics.php" class="hover:text-orange-200<?php echo $current_page === 'basics' ? ' font-bold' : ''; ?>">基礎知識</a>
                    <a href="ai-design.php" class="hover:text-orange-200<?php echo $current_page === 'tools' ? ' font-bold' : ''; ?>">AIツール</a>
                    <a href="practice-portfolio.php" class="hover:text-orange-200<?php echo $current_page === 'practice' ? ' font-bold' : ''; ?>">実践</a>
                    <a href="glossary.php" class="hover:text-orange-200<?php echo $current_page === 'support' ? ' font-bold' : ''; ?>">サポート</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-orange-200">ホーム</a>
                <a href="html-basics.php" class="block py-2 hover:text-orange-200">基礎知識</a>
                <a href="ai-design.php" class="block py-2 hover:text-orange-200">AIツール</a>
                <a href="practice-portfolio.php" class="block py-2 hover:text-orange-200">実践</a>
                <a href="glossary.php" class="block py-2 hover:text-orange-200">サポート</a>
            </div>
        </nav>
    </header>
