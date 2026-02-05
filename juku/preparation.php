<?php
$page_title = '導入準備 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">導入準備</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">AIツールを使い始めるための準備をしましょう。アカウント作成から、効果的な使い方の基本まで解説します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">アカウント作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">ChatGPTのアカウント作成</h3>
                <ol class="space-y-3">
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">1</span>
                        <span>chat.openai.com にアクセス</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">2</span>
                        <span>「Sign up」をクリック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">3</span>
                        <span>メールアドレスまたはGoogle/Microsoftアカウントで登録</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">4</span>
                        <span>メール認証を完了</span>
                    </li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">Claudeのアカウント作成</h3>
                <ol class="space-y-3">
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">1</span>
                        <span>claude.ai にアクセス</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">2</span>
                        <span>「Get started」をクリック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">3</span>
                        <span>メールアドレスまたはGoogleアカウントで登録</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-indigo-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3 flex-shrink-0">4</span>
                        <span>電話番号認証を完了</span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">プロンプトの基本</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <p class="mb-4">AIへの指示文を「プロンプト」と呼びます。良いプロンプトを書くことで、期待通りの回答が得られます。</p>

            <h3 class="font-bold text-lg mb-4 text-indigo-600">良いプロンプトの5つのポイント</h3>
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-indigo-500 font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">役割を与える</h4>
                        <p class="text-sm text-gray-600">「あなたは学習塾の教務担当です」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-indigo-500 font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">具体的に指示する</h4>
                        <p class="text-sm text-gray-600">「中学2年生向けの数学の問題を5問作成」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-indigo-500 font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">背景情報を伝える</h4>
                        <p class="text-sm text-gray-600">「生徒は方程式の基礎は理解しています」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-indigo-500 font-bold mr-3">4</span>
                    <div>
                        <h4 class="font-bold">出力形式を指定する</h4>
                        <p class="text-sm text-gray-600">「箇条書きで」「表形式で」「〇文字以内で」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-indigo-500 font-bold mr-3">5</span>
                    <div>
                        <h4 class="font-bold">例を示す</h4>
                        <p class="text-sm text-gray-600">「以下のような形式で：（例）〜」</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">プロンプト例：問題作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    あなたは学習塾の数学講師です。<br><br>
                    以下の条件で問題を作成してください。<br><br>
                    【条件】<br>
                    ・対象：中学2年生<br>
                    ・単元：連立方程式<br>
                    ・難易度：基礎〜標準<br>
                    ・問題数：5問<br><br>
                    【出力形式】<br>
                    ・問題文と解答を分けて記載<br>
                    ・各問題に解説を追加
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">個人情報の取り扱い</h2>

        <div class="bg-red-50 p-6 rounded-lg">
            <h3 class="font-bold text-red-600 mb-4">重要：入力してはいけない情報</h3>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>生徒の氏名・住所・電話番号</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>保護者の連絡先・勤務先</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>学校名と組み合わせた個人特定情報</span>
                </li>
                <li class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span>クレジットカード情報などの機密情報</span>
                </li>
            </ul>

            <div class="mt-4 p-4 bg-white rounded">
                <p class="text-sm font-bold mb-2">対策：匿名化・抽象化する</p>
                <p class="text-sm text-gray-600">例：「Aさん（中2男子、数学が苦手）」のように匿名化して入力</p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">まずは簡単な質問から始めてみましょう。「中学生に人気のある学習法は？」など、気軽に聞いてみることでAIの特性が分かってきます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-overview.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI概要・ツール紹介
        </a>
        <a href="sns-marketing.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：SNSマーケティング
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
