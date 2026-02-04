<?php
$page_title = 'AI×マーケティング入門 | AI Tech Stack';
$current_page = 'home';

include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AI×マーケティング入門</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">AIを活用して、マーケティングを効率化・高度化しよう</p>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="bg-white/20 px-4 py-2 rounded-full">ChatGPT</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">Claude</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">SNSマーケティング</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">コピーライティング</span>
            </div>
            <a href="marketing-basics.php" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">学習を始める</a>
        </div>
    </section>

    <!-- このサイトで学べること -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このサイトで学べること</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold mb-3">マーケティングの基礎</h3>
                    <p class="text-gray-600">デジタルマーケティングの基本概念、ターゲット設定、ファネル設計を学びます</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="text-xl font-bold mb-3">AIツールの活用</h3>
                    <p class="text-gray-600">ChatGPTやClaudeを使った効率的なマーケティング業務の進め方を習得します</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold mb-3">実践テクニック</h3>
                    <p class="text-gray-600">SNS、SEO、広告運用など、具体的な場面でのAI活用法を身につけます</p>
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
                <h3 class="text-xl font-bold mb-6 text-teal-600">第1部：マーケティングの基礎知識</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="marketing-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 1</div>
                        <div class="font-bold">マーケティングとは</div>
                    </a>
                    <a href="digital-marketing.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 2</div>
                        <div class="font-bold">デジタルマーケティング入門</div>
                    </a>
                    <a href="target-persona.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 3</div>
                        <div class="font-bold">ターゲットとペルソナ</div>
                    </a>
                    <a href="marketing-funnel.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 4</div>
                        <div class="font-bold">マーケティングファネル</div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-cyan-600">第2部：AIツールの活用</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="ai-tools.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 5</div>
                        <div class="font-bold">AI時代のマーケティング</div>
                    </a>
                    <a href="chatgpt-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 6</div>
                        <div class="font-bold">ChatGPT/Claudeの基本</div>
                    </a>
                    <a href="prompting.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 7</div>
                        <div class="font-bold">プロンプト術</div>
                    </a>
                    <a href="data-analysis.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 8</div>
                        <div class="font-bold">データ分析×AI</div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-blue-600">第3部：実践テクニック</h3>
                <div class="grid md:grid-cols-5 gap-4">
                    <a href="sns-marketing.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 9</div>
                        <div class="font-bold">SNS×AI</div>
                    </a>
                    <a href="copywriting.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 10</div>
                        <div class="font-bold">コピーライティング×AI</div>
                    </a>
                    <a href="seo-ai.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 11</div>
                        <div class="font-bold">SEO×AI</div>
                    </a>
                    <a href="email-marketing.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 12</div>
                        <div class="font-bold">メール×AI</div>
                    </a>
                    <a href="ad-ai.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 13</div>
                        <div class="font-bold">広告×AI</div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div>
                <h3 class="text-xl font-bold mb-6 text-purple-600">第4部：サポート</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="mistakes.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">よくある失敗と対策</div>
                        <p class="text-sm text-gray-500 mt-1">AI活用の落とし穴を回避</p>
                    </a>
                    <a href="next-steps.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">次のステップ</div>
                        <p class="text-sm text-gray-500 mt-1">さらなる学習リソース</p>
                    </a>
                    <a href="glossary.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">用語集</div>
                        <p class="text-sm text-gray-500 mt-1">マーケティング用語の解説</p>
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
                        <h3 class="font-bold mb-2">マーケティング初心者</h3>
                        <p class="text-gray-600">専門知識がなくても大丈夫。基礎から丁寧に解説します</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">AIを活用したい方</h3>
                        <p class="text-gray-600">ChatGPTやClaudeを使った効率化の方法を学べます</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">個人事業主・フリーランス</h3>
                        <p class="text-gray-600">一人でも効果的なマーケティングを実現できます</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">業務効率化を目指す方</h3>
                        <p class="text-gray-600">AIで時間のかかる作業を大幅に短縮できます</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">さあ、始めましょう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、効果的なマーケティングを学びましょう</p>
            <a href="marketing-basics.php" class="inline-block bg-white text-teal-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">Step 1: マーケティングの基礎を学ぶ</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
