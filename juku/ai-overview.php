<?php
$page_title = 'AI概要・ツール紹介 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI概要・ツール紹介</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">学習塾経営で活用できるAIツールを紹介します。それぞれの特徴を理解して、目的に応じて使い分けましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">主要なAIツール</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🤖</span>
                    <div>
                        <h3 class="font-bold text-xl text-indigo-600">ChatGPT</h3>
                        <p class="text-sm text-gray-500">OpenAI社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">最も広く使われている対話型AI。文章作成、問題作成、アイデア出しなど幅広く活用可能。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">塾での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・オリジナル問題の作成</li>
                        <li>・SNS投稿文の生成</li>
                        <li>・保護者向け報告書の下書き</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🧠</span>
                    <div>
                        <h3 class="font-bold text-xl text-indigo-600">Claude</h3>
                        <p class="text-sm text-gray-500">Anthropic社</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">長文の理解・作成に優れたAI。詳細な解説文や、複雑な内容の整理に適している。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">塾での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・詳しい解説・解答の作成</li>
                        <li>・カリキュラムの設計</li>
                        <li>・マニュアル・研修資料の作成</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="text-3xl mr-4">🎨</span>
                    <div>
                        <h3 class="font-bold text-xl text-indigo-600">Canva</h3>
                        <p class="text-sm text-gray-500">デザインツール + AI</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">デザインツールにAI機能が搭載。チラシ、SNS画像、教材の見た目を簡単に作成。</p>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">塾での活用例：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・入塾案内チラシの作成</li>
                        <li>・SNS投稿用画像</li>
                        <li>・教室内掲示物のデザイン</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">用途別おすすめツール</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-indigo-100">
                        <th class="p-4 text-left">用途</th>
                        <th class="p-4 text-left">おすすめ</th>
                        <th class="p-4 text-left">理由</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4">問題作成</td>
                        <td class="p-4 text-indigo-600 font-bold">ChatGPT / Claude</td>
                        <td class="p-4 text-sm">多様なパターンの問題を素早く生成</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">解説作成</td>
                        <td class="p-4 text-indigo-600 font-bold">Claude</td>
                        <td class="p-4 text-sm">詳細で分かりやすい解説が得意</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">SNS投稿</td>
                        <td class="p-4 text-indigo-600 font-bold">ChatGPT</td>
                        <td class="p-4 text-sm">キャッチーな短文作成に強い</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4">チラシ・画像</td>
                        <td class="p-4 text-indigo-600 font-bold">Canva</td>
                        <td class="p-4 text-sm">テンプレートで簡単デザイン</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4">報告書・面談準備</td>
                        <td class="p-4 text-indigo-600 font-bold">Claude</td>
                        <td class="p-4 text-sm">丁寧な文章作成に適している</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">無料版と有料版の違い</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">ChatGPT / Claude の場合</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded">
                    <h4 class="font-bold mb-2">無料版</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・基本的な機能は利用可能</li>
                        <li>・利用回数に制限あり</li>
                        <li>・最新モデルは使えないことも</li>
                        <li>・まずはこちらで十分</li>
                    </ul>
                </div>
                <div class="bg-indigo-50 p-4 rounded">
                    <h4 class="font-bold mb-2">有料版（月額約3,000円）</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・利用回数の制限が緩和</li>
                        <li>・最新の高性能モデル</li>
                        <li>・画像生成機能（ChatGPT）</li>
                        <li>・業務で本格利用するなら検討</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは無料版で試してみましょう。ChatGPTとClaudeは両方使ってみて、自分に合う方をメインに。本格的に業務で使うなら有料版への移行を検討してください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-juku-intro.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×学習塾経営とは
        </a>
        <a href="preparation.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：導入準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
