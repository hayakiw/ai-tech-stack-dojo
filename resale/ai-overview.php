<?php
$page_title = '生成AIの基礎知識 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">生成AIの基礎知識</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">せどり・転売で活用できるAIツールを紹介します。それぞれの特徴を理解して、目的に応じて使い分けましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">主要なAIツール</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🤖</span>
                    <div>
                        <h3 class="font-bold text-xl text-lime-600">ChatGPT</h3>
                        <p class="text-sm text-gray-500">OpenAI社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">最も広く使われている対話型AI。商品説明文の作成、顧客対応文の生成、市場分析など幅広く活用可能。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">せどりでの活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・商品説明文・タイトルの作成</li>
                        <li>・問い合わせへの返信文作成</li>
                        <li>・商品カテゴリの市場分析</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🧠</span>
                    <div>
                        <h3 class="font-bold text-xl text-lime-600">Claude</h3>
                        <p class="text-sm text-gray-500">Anthropic社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">長文の理解・作成に優れたAI。詳細な商品分析レポートや、複雑な価格戦略の検討に適している。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">せどりでの活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・競合分析レポートの作成</li>
                        <li>・仕入れ戦略の検討</li>
                        <li>・ビジネス計画の立案</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">✨</span>
                    <div>
                        <h3 class="font-bold text-xl text-lime-600">Gemini</h3>
                        <p class="text-sm text-gray-500">Google社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Google検索やGoogleサービスとの連携が強み。最新のトレンド情報や市場動向の取得に優れている。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">せどりでの活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・トレンド商品の調査</li>
                        <li>・季節商品の需要予測</li>
                        <li>・Googleスプレッドシート連携</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🎨</span>
                    <div>
                        <h3 class="font-bold text-xl text-lime-600">Canva</h3>
                        <p class="text-sm text-gray-500">デザインツール + AI</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">デザインツールにAI機能が搭載。商品画像の加工、バナー作成、サムネイル作成に活用。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">せどりでの活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・商品画像の背景除去・加工</li>
                        <li>・サムネイル画像の作成</li>
                        <li>・販促バナーの作成</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">用途別おすすめツール</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-lime-100">
                        <th class="p-4 text-left">用途</th>
                        <th class="p-4 text-left">おすすめ</th>
                        <th class="p-4 text-left">理由</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4">商品説明文</td>
                        <td class="p-4 text-lime-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">キャッチーな文章作成が得意</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">市場リサーチ</td>
                        <td class="p-4 text-lime-600 font-bold">Gemini</td>
                        <td class="p-4 text-sm">最新情報の取得に強い</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">戦略立案</td>
                        <td class="p-4 text-lime-600 font-bold">Claude</td>
                        <td class="p-4 text-sm">複雑な分析・長文に強い</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">画像加工</td>
                        <td class="p-4 text-lime-600 font-bold">Canva</td>
                        <td class="p-4 text-sm">テンプレートで簡単編集</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">顧客対応</td>
                        <td class="p-4 text-lime-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">丁寧な返信文を素早く生成</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは無料版で試してみましょう。複数のツールを使い分けることで、より効率的にせどりを進められます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-resale-intro.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×せどり・転売とは
        </a>
        <a href="preparation.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：AI活用の準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
