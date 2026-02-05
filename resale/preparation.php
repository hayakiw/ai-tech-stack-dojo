<?php
$page_title = 'AI活用の準備 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI活用の準備</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">せどりでAIを活用するための準備を整えましょう。アカウント作成からプロンプトの基本まで解説します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">AIツールのアカウント作成</h2>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-lime-600 mb-3">1. ChatGPT</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>OpenAIの公式サイト（chat.openai.com）にアクセス</li>
                    <li>「Sign up」をクリック</li>
                    <li>メールアドレスまたはGoogleアカウントで登録</li>
                    <li>電話番号認証を完了</li>
                </ol>
                <p class="text-sm text-gray-500 mt-3">※無料版で十分始められます。より高性能なGPT-4は有料版（月額$20）で利用可能。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-lime-600 mb-3">2. Claude</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>Anthropicの公式サイト（claude.ai）にアクセス</li>
                    <li>「Get started」をクリック</li>
                    <li>Googleアカウントまたはメールで登録</li>
                </ol>
                <p class="text-sm text-gray-500 mt-3">※無料版でも高性能。長文の分析や戦略立案に活用。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-lime-600 mb-3">3. Gemini</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>Googleの公式サイト（gemini.google.com）にアクセス</li>
                    <li>Googleアカウントでログイン</li>
                </ol>
                <p class="text-sm text-gray-500 mt-3">※Googleアカウントがあればすぐに利用可能。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">プロンプトの基本</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <p class="text-gray-700 mb-4">プロンプトとは、AIへの指示文のこと。より具体的で明確なプロンプトを書くことで、期待通りの出力を得られます。</p>

            <h3 class="font-bold text-lime-600 mb-3">良いプロンプトの条件</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="text-lime-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">役割を明確にする</h4>
                        <p class="text-sm text-gray-600">「あなたはせどりの専門家として〜」</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-lime-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">具体的な条件を指定</h4>
                        <p class="text-sm text-gray-600">「メルカリ向け」「200文字程度」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-lime-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">背景情報を提供</h4>
                        <p class="text-sm text-gray-600">商品情報、ターゲット層などを伝える</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-lime-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">出力形式を指定</h4>
                        <p class="text-sm text-gray-600">「箇条書きで」「3パターン作成」など</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg text-lime-600 mb-4">プロンプト例</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    あなたはメルカリ販売のプロです。<br><br>
                    以下の商品の説明文を作成してください。<br><br>
                    【商品】Nintendo Switch 本体<br>
                    【状態】中古・美品・動作確認済み<br>
                    【付属品】本体、ドック、Joy-Con、充電器<br><br>
                    【条件】<br>
                    ・購買意欲を高める文章<br>
                    ・状態の良さをアピール<br>
                    ・300文字程度<br>
                    ・メルカリの検索に引っかかりやすいキーワードを含める
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">せどりに必要な準備</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">販売プラットフォームのアカウント</h4>
                    <p class="text-sm text-gray-600">メルカリ、Amazon、ヤフオク、楽天ラクマなど</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">仕入れ資金</h4>
                    <p class="text-sm text-gray-600">まずは1〜5万円程度から始められる</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">梱包資材</h4>
                    <p class="text-sm text-gray-600">段ボール、緩衝材、テープ、OPP袋など</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">スマートフォン</h4>
                    <p class="text-sm text-gray-600">商品撮影、出品、AIツール利用に必須</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずはAIツールを実際に触ってみましょう。最初は簡単な質問から始めて、徐々にせどり用のプロンプトを試していくのがおすすめです。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-overview.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：生成AIの基礎知識
        </a>
        <a href="product-research.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：リサーチ・商品選定
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
