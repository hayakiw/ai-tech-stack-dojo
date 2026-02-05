<?php
$page_title = '導入準備 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">導入準備</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">AIツールを使い始めるための準備をしましょう。アカウント作成から、歯科医院での効果的な使い方の基本まで解説します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">アカウント作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">ChatGPTのアカウント作成</h3>
                <ol class="space-y-3">
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">1</span>
                        <span>chat.openai.com にアクセス</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">2</span>
                        <span>「Sign up」をクリック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">3</span>
                        <span>メールアドレスまたはGoogle/Microsoftアカウントで登録</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">4</span>
                        <span>メール認証を完了</span>
                    </li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">Claudeのアカウント作成</h3>
                <ol class="space-y-3">
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">1</span>
                        <span>claude.ai にアクセス</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">2</span>
                        <span>「Get started」をクリック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">3</span>
                        <span>メールアドレスまたはGoogleアカウントで登録</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-cyan-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">4</span>
                        <span>電話番号認証を完了</span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">プロンプトの基本</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <p class="mb-4">AIへの指示文を「プロンプト」と呼びます。良いプロンプトを書くことで、期待通りの回答が得られます。</p>

            <h3 class="font-bold text-lg mb-4 text-cyan-600">歯科医院向けプロンプトのコツ</h3>
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-cyan-500 font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">役割を与える</h4>
                        <p class="text-sm text-gray-600">「あなたは歯科医院の受付担当です」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-cyan-500 font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">対象者を明確に</h4>
                        <p class="text-sm text-gray-600">「患者さん向けに」「専門知識がない方にも分かるように」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-cyan-500 font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">具体的に指示する</h4>
                        <p class="text-sm text-gray-600">「虫歯の治療について200文字で説明」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-cyan-500 font-bold mr-3">4</span>
                    <div>
                        <h4 class="font-bold">トーンを指定する</h4>
                        <p class="text-sm text-gray-600">「安心感を与える優しい口調で」など</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">プロンプト例：治療説明</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    あなたは歯科医院の受付担当です。<br><br>
                    以下の治療について、患者さん向けの説明文を作成してください。<br><br>
                    【治療内容】根管治療（神経の治療）<br>
                    【対象】専門知識がない一般の患者さん<br>
                    【文字数】300文字程度<br>
                    【トーン】安心感を与える優しい口調<br><br>
                    治療の流れ、所要時間、痛みへの配慮について含めてください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">個人情報・医療情報の取り扱い</h2>

        <div class="bg-red-50 p-6 rounded-lg">
            <h3 class="font-bold text-red-600 mb-4">重要：入力してはいけない情報</h3>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>患者の氏名・住所・電話番号・生年月日</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>カルテ情報・診療内容の詳細</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>保険証番号・マイナンバー</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>レントゲン画像など個人を特定できる情報</span>
                </li>
            </ul>

            <div class="mt-4 p-4 bg-white rounded">
                <p class="text-sm font-bold mb-2">対策：一般化・匿名化する</p>
                <p class="text-sm text-gray-600">例：「40代女性、奥歯の痛みを訴えている」のように一般化して入力</p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは簡単な文章作成から始めてみましょう。「歯磨きのコツを子供向けに説明して」など、気軽に試してAIの特性を理解しましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-overview.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI概要・ツール紹介
        </a>
        <a href="sns-marketing.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：SNSマーケティング
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
