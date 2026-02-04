<?php
$page_title = $page_title ?? 'AI×営業・セールス | AI Tech Stack';
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
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
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
                    <a href="../index.php" class="text-sm text-teal-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×営業・セールス</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-blue-200 <?php echo $current_page === 'home' ? 'text-blue-200' : ''; ?>">ホーム</a>
                    <a href="sales-basics.php" class="hover:text-blue-200 <?php echo $current_page === 'basics' ? 'text-blue-200' : ''; ?>">基礎知識</a>
                    <a href="ai-tools.php" class="hover:text-blue-200 <?php echo $current_page === 'ai' ? 'text-blue-200' : ''; ?>">AIツール</a>
                    <a href="email-sales.php" class="hover:text-blue-200 <?php echo $current_page === 'practice' ? 'text-blue-200' : ''; ?>">実践</a>
                    <a href="glossary.php" class="hover:text-blue-200 <?php echo $current_page === 'support' ? 'text-blue-200' : ''; ?>">用語集</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-blue-200">ホーム</a>
                <a href="sales-basics.php" class="block py-2 hover:text-blue-200">基礎知識</a>
                <a href="ai-tools.php" class="block py-2 hover:text-blue-200">AIツール</a>
                <a href="email-sales.php" class="block py-2 hover:text-blue-200">実践</a>
                <a href="glossary.php" class="block py-2 hover:text-blue-200">用語集</a>
                <a href="../index.php" class="block py-2 hover:text-blue-200">← Dojo</a>
            </div>
        </nav>
    </header>
