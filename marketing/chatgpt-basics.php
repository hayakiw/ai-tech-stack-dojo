<?php
$page_title = 'ChatGPT/Claudeの基本 - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 6;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ChatGPT/Claudeの基本</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">マーケティングに最も使いやすいAIツールがChatGPTとClaude。基本的な使い方と、それぞれの特徴を理解しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">ChatGPTとClaudeの比較</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">🟢</span>
                        <h3 class="font-bold text-lg">ChatGPT（OpenAI）</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>ユーザー数が多く情報が豊富</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>プラグイン機能が充実</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>画像生成（DALL-E）統合</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">○</span>
                            <span>クリエイティブな文章が得意</span>
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-sm text-gray-600">料金：無料版あり / Plus $20/月</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">🟣</span>
                        <h3 class="font-bold text-lg">Claude（Anthropic）</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>長文の処理が得意</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>論理的で正確な回答</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">◎</span>
                            <span>日本語の品質が高い</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">○</span>
                            <span>安全性への配慮が強い</span>
                        </li>
                    </ul>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-sm text-gray-600">料金：無料版あり / Pro $20/月</p>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>おすすめ：</strong>まずは無料版で両方試してみて、自分に合う方をメインで使いましょう。用途によって使い分けるのも効果的です。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">基本的な使い方</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 1: アカウント作成</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">ChatGPT</p>
                            <p class="text-sm text-gray-600">chat.openai.com にアクセス → Sign up → メールまたはGoogle/Appleアカウントで登録</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded">
                            <p class="font-bold text-sm mb-2">Claude</p>
                            <p class="text-sm text-gray-600">claude.ai にアクセス → Sign up → メールまたはGoogleアカウントで登録</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 2: 会話を始める</h3>
                    <p class="mb-4">チャット欄にテキストを入力して送信するだけ。日本語でOKです。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded">
                        <p class="text-teal-400 mb-2">入力例：</p>
                        <p class="text-sm">「オンライン英会話サービスのキャッチコピーを5つ考えてください」</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">Step 3: 会話を続ける</h3>
                    <p class="mb-4">AIは会話の流れを覚えています。追加の指示や修正を伝えましょう。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded">
                        <p class="text-teal-400 mb-2">追加指示の例：</p>
                        <ul class="text-sm space-y-1">
                            <li>「2番目をもう少しカジュアルにしてください」</li>
                            <li>「20代向けに書き直してください」</li>
                            <li>「もっと短くしてください」</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティングでの活用シーン</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📝</span>
                    <h4 class="font-bold mt-2 mb-1">コピーライティング</h4>
                    <p class="text-sm text-gray-600">キャッチコピー、商品説明、広告文</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📱</span>
                    <h4 class="font-bold mt-2 mb-1">SNS投稿</h4>
                    <p class="text-sm text-gray-600">投稿文、ハッシュタグ、投稿計画</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📧</span>
                    <h4 class="font-bold mt-2 mb-1">メール作成</h4>
                    <p class="text-sm text-gray-600">メルマガ、営業メール、フォローメール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📊</span>
                    <h4 class="font-bold mt-2 mb-1">リサーチ</h4>
                    <p class="text-sm text-gray-600">市場調査、競合分析、トレンド調査</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">💡</span>
                    <h4 class="font-bold mt-2 mb-1">企画立案</h4>
                    <p class="text-sm text-gray-600">キャンペーン案、コンテンツ企画</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🔍</span>
                    <h4 class="font-bold mt-2 mb-1">SEO対策</h4>
                    <p class="text-sm text-gray-600">キーワード提案、記事構成作成</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">使う上での注意点</h2>

            <div class="space-y-4">
                <div class="bg-red-50 p-4 rounded-lg">
                    <h4 class="font-bold text-red-600 mb-2">⚠️ 情報の正確性</h4>
                    <p class="text-sm">AIは間違った情報を自信満々に答えることがあります。重要な数値やデータは必ず確認しましょう。</p>
                </div>
                <div class="bg-red-50 p-4 rounded-lg">
                    <h4 class="font-bold text-red-600 mb-2">⚠️ 機密情報</h4>
                    <p class="text-sm">顧客の個人情報や社外秘の情報は入力しないでください。</p>
                </div>
                <div class="bg-red-50 p-4 rounded-lg">
                    <h4 class="font-bold text-red-600 mb-2">⚠️ 著作権</h4>
                    <p class="text-sm">AIの出力をそのまま使う場合は、著作権や独自性に注意。必ず編集・加工しましょう。</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ChatGPTとClaudeはどちらも無料で始められる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>日本語で会話するだけで使える</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>追加の指示で回答を調整できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>情報の正確性と機密情報には注意</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-tools.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI時代のマーケティング
            </a>
            <a href="prompting.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：プロンプト術
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
