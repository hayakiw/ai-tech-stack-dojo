<?php
$page_title = 'AI活用の準備 - AI×占い・スピリチュアル | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI活用の準備</h1>

    <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
        <p class="text-lg">占い・スピリチュアルビジネスでAIを活用するための準備を整えましょう。アカウント作成からプロンプトの基本まで解説します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIツールのアカウント作成</h2>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-purple-600 mb-3">1. ChatGPT</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>OpenAIの公式サイト（chat.openai.com）にアクセス</li>
                    <li>「Sign up」をクリック</li>
                    <li>メールアドレスまたはGoogleアカウントで登録</li>
                    <li>電話番号認証を完了</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-purple-600 mb-3">2. Claude</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>Anthropicの公式サイト（claude.ai）にアクセス</li>
                    <li>「Get started」をクリック</li>
                    <li>Googleアカウントまたはメールで登録</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-purple-600 mb-3">3. Canva</h3>
                <ol class="text-gray-600 space-y-2 list-decimal list-inside">
                    <li>Canvaの公式サイト（canva.com）にアクセス</li>
                    <li>Googleアカウントまたはメールで登録</li>
                    <li>無料版で十分スタート可能</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">占い師向けプロンプトの基本</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-purple-600 mb-3">良いプロンプトの条件</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="text-purple-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">役割を明確にする</h4>
                        <p class="text-sm text-gray-600">「あなたは経験豊富なタロット占い師として〜」</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-purple-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">占術・カードを指定</h4>
                        <p class="text-sm text-gray-600">「愚者のカード（正位置）の意味を踏まえて」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-purple-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">相談内容を伝える</h4>
                        <p class="text-sm text-gray-600">「恋愛の悩みを持つ30代女性への」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-purple-500 mr-3">✓</span>
                    <div>
                        <h4 class="font-bold">トーンを指定</h4>
                        <p class="text-sm text-gray-600">「優しく寄り添う」「前向きな」「神秘的な」など</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg text-purple-600 mb-4">プロンプト例</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    あなたは経験豊富なタロット占い師です。<br><br>
                    以下の条件で鑑定メッセージを作成してください。<br><br>
                    【相談者】30代女性、恋愛の悩み<br>
                    【質問】「今の彼との関係は今後どうなりますか？」<br>
                    【引いたカード】<br>
                    ・過去：女帝（正位置）<br>
                    ・現在：吊るされた男（正位置）<br>
                    ・未来：太陽（正位置）<br><br>
                    【条件】<br>
                    ・各カードの意味を踏まえて解釈<br>
                    ・優しく寄り添うトーン<br>
                    ・前向きなアドバイスを含める<br>
                    ・400文字程度
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">占いビジネスに必要な準備</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">得意な占術を決める</h4>
                    <p class="text-sm text-gray-600">タロット、西洋占星術、数秘術、四柱推命など、まずは1-2つに絞る</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">SNSアカウントの準備</h4>
                    <p class="text-sm text-gray-600">Instagram、X（Twitter）、TikTokなど発信の場を用意</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">鑑定プラットフォーム</h4>
                    <p class="text-sm text-gray-600">ココナラ、STORES、独自サイトなど販売の場を決める</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">自分のスタイルを明確に</h4>
                    <p class="text-sm text-gray-600">どんな人の、どんな悩みに寄り添いたいかを言語化</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIは「あなたの言葉」を引き出すツール。まずはいろいろ試して、自分のスタイルに合った使い方を見つけましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-overview.php" class="flex items-center text-gray-600 hover:text-purple-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：生成AIの基礎知識
        </a>
        <a href="sns-marketing.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
            次へ：SNSマーケティング
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
