<?php
$page_title = 'AI概要・ツール紹介 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI概要・ツール紹介</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">歯科医院経営で活用できるAIツールを紹介します。それぞれの特徴を理解して、目的に応じて使い分けましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">主要なAIツール</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🤖</span>
                    <div>
                        <h3 class="font-bold text-xl text-cyan-600">ChatGPT</h3>
                        <p class="text-sm text-gray-500">OpenAI社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">最も広く使われている対話型AI。文章作成、アイデア出し、患者向け資料の作成など幅広く活用可能。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">歯科医院での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・治療説明文の作成</li>
                        <li>・SNS投稿文の生成</li>
                        <li>・患者向けQ&Aの作成</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🧠</span>
                    <div>
                        <h3 class="font-bold text-xl text-cyan-600">Claude</h3>
                        <p class="text-sm text-gray-500">Anthropic社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">長文の理解・作成に優れたAI。詳細なマニュアルや、複雑な内容の整理に適している。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">歯科医院での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・スタッフマニュアルの作成</li>
                        <li>・同意書の文面作成</li>
                        <li>・研修資料の作成</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">✨</span>
                    <div>
                        <h3 class="font-bold text-xl text-cyan-600">Gemini</h3>
                        <p class="text-sm text-gray-500">Google社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Googleが開発した対話型AI。Google検索やGoogleサービスとの連携が強み。最新情報の取得にも優れている。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">歯科医院での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・競合医院の調査・分析</li>
                        <li>・最新の歯科トレンド情報収集</li>
                        <li>・Googleサービスとの連携業務</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🎨</span>
                    <div>
                        <h3 class="font-bold text-xl text-cyan-600">Canva</h3>
                        <p class="text-sm text-gray-500">デザインツール + AI</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">デザインツールにAI機能が搭載。チラシ、SNS画像、院内掲示物を簡単に作成。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">歯科医院での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・医院パンフレットの作成</li>
                        <li>・予防歯科の啓発ポスター</li>
                        <li>・SNS投稿用画像</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">用途別おすすめツール</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-cyan-100">
                        <th class="p-4 text-left">用途</th>
                        <th class="p-4 text-left">おすすめ</th>
                        <th class="p-4 text-left">理由</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4">治療説明文</td>
                        <td class="p-4 text-cyan-600 font-bold">ChatGPT / Claude</td>
                        <td class="p-4 text-sm">分かりやすい説明文を素早く生成</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">マニュアル作成</td>
                        <td class="p-4 text-cyan-600 font-bold">Claude</td>
                        <td class="p-4 text-sm">長文の構成・整理が得意</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">SNS投稿</td>
                        <td class="p-4 text-cyan-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">キャッチーな短文作成に強い</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">チラシ・ポスター</td>
                        <td class="p-4 text-cyan-600 font-bold">Canva</td>
                        <td class="p-4 text-sm">テンプレートで簡単デザイン</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">口コミ返信</td>
                        <td class="p-4 text-cyan-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">状況に応じた丁寧な返信を生成</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは無料版で試してみましょう。医療情報を扱う際は、必ず専門家の確認を経てから使用してください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-dental-intro.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×歯科医院経営とは
        </a>
        <a href="preparation.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：導入準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
