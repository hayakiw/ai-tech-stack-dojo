<?php
$page_title = '生成AIの基礎知識 - AI×占い・スピリチュアル | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">生成AIの基礎知識</h1>

    <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
        <p class="text-lg">占い・スピリチュアルビジネスで活用できるAIツールを紹介します。それぞれの特徴を理解して、目的に応じて使い分けましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">主要なAIツール</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🤖</span>
                    <div>
                        <h3 class="font-bold text-xl text-purple-600">ChatGPT</h3>
                        <p class="text-sm text-gray-500">OpenAI社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">最も広く使われている対話型AI。鑑定文の作成、SNS投稿、ブログ記事など幅広く活用可能。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">占い師向け活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・タロットカードの意味を踏まえた鑑定文作成</li>
                        <li>・毎日の星座占いコンテンツ</li>
                        <li>・顧客へのメッセージ作成</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🧠</span>
                    <div>
                        <h3 class="font-bold text-xl text-purple-600">Claude</h3>
                        <p class="text-sm text-gray-500">Anthropic社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">長文の理解・作成に優れたAI。詳細な鑑定レポートや、深いスピリチュアルコンテンツの作成に適している。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">占い師向け活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・詳細な鑑定レポートの作成</li>
                        <li>・スピリチュアルコラムの執筆</li>
                        <li>・占術の解説記事</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">✨</span>
                    <div>
                        <h3 class="font-bold text-xl text-purple-600">Gemini</h3>
                        <p class="text-sm text-gray-500">Google社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Google検索やGoogleサービスとの連携が強み。最新のトレンドやイベント情報の取得に優れている。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">占い師向け活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・天体イベント・暦の情報収集</li>
                        <li>・トレンドに合わせたコンテンツ作成</li>
                        <li>・競合リサーチ</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🎨</span>
                    <div>
                        <h3 class="font-bold text-xl text-purple-600">Canva</h3>
                        <p class="text-sm text-gray-500">デザインツール + AI</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">デザインツールにAI機能が搭載。SNS投稿画像、サービス紹介画像、タロットカード解説画像などを作成。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">占い師向け活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・インスタグラム用の占い画像</li>
                        <li>・サービスメニュー画像</li>
                        <li>・プロフィール画像・バナー</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">用途別おすすめツール</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-purple-100">
                        <th class="p-4 text-left">用途</th>
                        <th class="p-4 text-left">おすすめ</th>
                        <th class="p-4 text-left">理由</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4">鑑定文作成</td>
                        <td class="p-4 text-purple-600 font-bold">ChatGPT / Claude</td>
                        <td class="p-4 text-sm">繊細な表現が得意</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">SNS投稿</td>
                        <td class="p-4 text-purple-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">キャッチーな短文に強い</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">ブログ記事</td>
                        <td class="p-4 text-purple-600 font-bold">Claude</td>
                        <td class="p-4 text-sm">長文コンテンツが得意</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">画像作成</td>
                        <td class="p-4 text-purple-600 font-bold">Canva</td>
                        <td class="p-4 text-sm">テンプレートで簡単作成</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">リサーチ</td>
                        <td class="p-4 text-purple-600 font-bold">Gemini</td>
                        <td class="p-4 text-sm">最新情報の取得に強い</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは無料版で試してみましょう。占いの世界観に合った表現を引き出すには、プロンプト（指示文）の工夫が大切です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-fortune-intro.php" class="flex items-center text-gray-600 hover:text-purple-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×占い・スピリチュアルとは
        </a>
        <a href="preparation.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
            次へ：AI活用の準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
