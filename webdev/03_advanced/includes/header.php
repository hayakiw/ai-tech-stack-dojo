<?php
// ページ設定のデフォルト値
$page_title = $page_title ?? 'AI駆動開発 上級編 | AI Tech Stack';
$current_page = $current_page ?? '';
$extra_styles = $extra_styles ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '../../includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #dc2626 0%, #ea580c 50%, #f59e0b 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #dc2626 0%, #ea580c 100%);
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
                <a href="../index.php" class="text-2xl font-bold">AI Tech Stack Dojo <span class="text-yellow-200">上級編</span></a>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-yellow-200<?php echo $current_page === 'home' ? ' font-bold' : ''; ?>">ホーム</a>
                    <a href="ai-large-project.php" class="hover:text-yellow-200<?php echo $current_page === 'ai-deep' ? ' font-bold' : ''; ?>">AI深化</a>
                    <a href="ai-architecture.php" class="hover:text-yellow-200<?php echo $current_page === 'architecture' ? ' font-bold' : ''; ?>">設計</a>
                    <a href="ai-testing.php" class="hover:text-yellow-200<?php echo $current_page === 'testing' ? ' font-bold' : ''; ?>">テスト</a>
                    <a href="mcp-intro.php" class="hover:text-yellow-200<?php echo $current_page === 'mcp' ? ' font-bold' : ''; ?>">MCP</a>
                    <a href="project-design.php" class="hover:text-yellow-200<?php echo $current_page === 'practice' ? ' font-bold' : ''; ?>">実践</a>
                </div>
                <button id="menuBtn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- モバイルメニュー -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="index.php" class="block py-2 hover:text-yellow-200">ホーム</a>
                <a href="ai-large-project.php" class="block py-2 hover:text-yellow-200">AI深化</a>
                <a href="ai-architecture.php" class="block py-2 hover:text-yellow-200">設計</a>
                <a href="ai-testing.php" class="block py-2 hover:text-yellow-200">テスト</a>
                <a href="mcp-intro.php" class="block py-2 hover:text-yellow-200">MCP</a>
                <a href="project-design.php" class="block py-2 hover:text-yellow-200">実践</a>
            </div>
        </nav>
    </header>
