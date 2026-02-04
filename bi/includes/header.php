<?php
$page_title = $page_title ?? 'AI×データ分析・BI | AI Tech Stack';
$current_page = $current_page ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '../includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- ヘッダー -->
    <header class="gradient-bg text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-emerald-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×データ分析・BI</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-emerald-200 <?php echo $current_page === 'home' ? 'text-emerald-200' : ''; ?>">ホーム</a>
                    <a href="data-basics.php" class="hover:text-emerald-200 <?php echo $current_page === 'basics' ? 'text-emerald-200' : ''; ?>">基礎知識</a>
                    <a href="ai-analysis.php" class="hover:text-emerald-200 <?php echo $current_page === 'ai' ? 'text-emerald-200' : ''; ?>">AIツール</a>
                    <a href="bi-tools.php" class="hover:text-emerald-200 <?php echo $current_page === 'practice' ? 'text-emerald-200' : ''; ?>">BI実践</a>
                    <a href="glossary.php" class="hover:text-emerald-200 <?php echo $current_page === 'support' ? 'text-emerald-200' : ''; ?>">用語集</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-emerald-200">ホーム</a>
                <a href="data-basics.php" class="block py-2 hover:text-emerald-200">基礎知識</a>
                <a href="ai-analysis.php" class="block py-2 hover:text-emerald-200">AIツール</a>
                <a href="bi-tools.php" class="block py-2 hover:text-emerald-200">BI実践</a>
                <a href="glossary.php" class="block py-2 hover:text-emerald-200">用語集</a>
            </div>
        </nav>
    </header>
