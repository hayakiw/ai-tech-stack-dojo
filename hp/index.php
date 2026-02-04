<?php
$page_title = 'AI×ホームページ制作 | AI Tech Stack';
$current_page = 'home';

include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AI×ホームページ制作</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">AIの力を借りて、プロ品質のWebサイトを作ろう</p>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="bg-white/20 px-4 py-2 rounded-full">HTML/CSS</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">ChatGPT/Claude</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">ノーコード</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">デザイン</span>
            </div>
            <a href="html-basics.php" class="inline-block bg-white text-orange-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">学習を始める</a>
        </div>
    </section>

    <!-- このサイトで学べること -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このサイトで学べること</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">🌐</div>
                    <h3 class="text-xl font-bold mb-3">Web制作の基礎</h3>
                    <p class="text-gray-600">HTML/CSSの基本から、レスポンシブデザインまで学びます</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="text-xl font-bold mb-3">AIツールの活用</h3>
                    <p class="text-gray-600">ChatGPTやClaudeを使って効率的にWebサイトを作成します</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-bold mb-3">実践サイト制作</h3>
                    <p class="text-gray-600">ポートフォリオ、ビジネスサイト、LPを実際に作成します</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 学習ロードマップ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">学習ロードマップ</h2>

            <!-- 第1部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-orange-600">第1部：Web制作の基礎知識</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="html-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 1</div>
                        <div class="font-bold">HTMLの基礎</div>
                    </a>
                    <a href="css-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 2</div>
                        <div class="font-bold">CSSの基礎</div>
                    </a>
                    <a href="responsive.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 3</div>
                        <div class="font-bold">レスポンシブデザイン</div>
                    </a>
                    <a href="design-principles.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 4</div>
                        <div class="font-bold">デザインの基本原則</div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-amber-600">第2部：AIツールの活用</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="ai-design.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 5</div>
                        <div class="font-bold">AIでデザインを効率化</div>
                    </a>
                    <a href="ai-coding.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 6</div>
                        <div class="font-bold">AIでコーディング支援</div>
                    </a>
                    <a href="ai-images.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 7</div>
                        <div class="font-bold">AIで画像生成</div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-yellow-600">第3部：実践サイト制作</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="practice-portfolio.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 8</div>
                        <div class="font-bold">ポートフォリオサイト</div>
                    </a>
                    <a href="practice-business.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 9</div>
                        <div class="font-bold">ビジネスサイト</div>
                    </a>
                    <a href="practice-lp.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 10</div>
                        <div class="font-bold">LP制作</div>
                    </a>
                    <a href="practice-blog.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 11</div>
                        <div class="font-bold">ブログサイト</div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div>
                <h3 class="text-xl font-bold mb-6 text-red-600">第4部：公開とサポート</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="publish.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 12</div>
                        <div class="font-bold">公開と運用</div>
                    </a>
                    <a href="next-steps.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">次のステップ</div>
                        <p class="text-sm text-gray-500 mt-1">さらなる学習リソース</p>
                    </a>
                    <a href="glossary.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">用語集</div>
                        <p class="text-sm text-gray-500 mt-1">Web制作用語の解説</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 対象者 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">こんな方におすすめ</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">Web制作初心者</h3>
                        <p class="text-gray-600">HTMLやCSSを触ったことがない方でも大丈夫</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">自分のサイトを作りたい方</h3>
                        <p class="text-gray-600">ポートフォリオや自社サイトを作りたい方</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">副業・フリーランス志望</h3>
                        <p class="text-gray-600">Web制作で収入を得たい方</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">AIを活用したい方</h3>
                        <p class="text-gray-600">ChatGPTやClaudeでWeb制作を効率化したい方</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">さあ、始めましょう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、魅力的なWebサイトを作りましょう</p>
            <a href="html-basics.php" class="inline-block bg-white text-orange-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">Step 1: HTMLの基礎を学ぶ</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
