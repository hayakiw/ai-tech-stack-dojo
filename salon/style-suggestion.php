<?php
$page_title = 'ヘアスタイル提案をAIでサポート - AI×美容院経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：接客・カウンセリング';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">ヘアスタイル提案をAIでサポート</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">お客様に似合うスタイルを提案するスキルは、スタイリストの腕の見せどころ。AIを活用して、提案の幅を広げ、説得力のあるカウンセリングを実現しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">顔型別スタイル提案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">顔型に合わせた提案プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の条件に合うヘアスタイルを3つ提案してください。<br><br>
                    【お客様情報】<br>
                    ・顔型：丸顔<br>
                    ・年代：30代<br>
                    ・髪質：細くて柔らかい、ボリュームが出にくい<br>
                    ・悩み：顔が大きく見える、幼く見られる<br>
                    ・希望：大人っぽく、小顔に見せたい<br>
                    ・ライフスタイル：子育て中、スタイリング時間は短め<br><br>
                    【出力形式】<br>
                    各スタイルについて：<br>
                    ・スタイル名<br>
                    ・なぜこの顔型に合うか<br>
                    ・スタイリングのポイント<br>
                    ・注意点
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">トレンドスタイルの知識</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">最新トレンドの情報収集</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    2024年春のヘアトレンドを教えてください。<br><br>
                    【知りたい内容】<br>
                    1. カットのトレンド（3つ）<br>
                    2. カラーのトレンド（3つ）<br>
                    3. パーマのトレンド（3つ）<br><br>
                    各トレンドについて：<br>
                    ・特徴<br>
                    ・どんな人におすすめか<br>
                    ・お客様への説明の仕方
                </p>
            </div>
            <div class="bg-violet-50 p-4 rounded">
                <p class="text-sm"><strong>💡 ヒント：</strong>AIの情報は最新でない場合があります。トレンドは業界誌やInstagramでも確認し、AIは説明文作成に活用しましょう。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">カラー提案のサポート</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">パーソナルカラー別カラー提案</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のお客様に似合うヘアカラーを提案してください。<br><br>
                    【お客様情報】<br>
                    ・パーソナルカラー：イエベ秋<br>
                    ・肌色：やや暗め、黄み寄り<br>
                    ・現在の髪色：暗めの茶色（6トーン）<br>
                    ・希望：明るくしたいけど派手すぎないもの<br>
                    ・職業：営業職（派手すぎるのはNG）<br><br>
                    【出力形式】<br>
                    ・おすすめカラー3つ<br>
                    ・各カラーの特徴<br>
                    ・なぜこのパーソナルカラーに合うか<br>
                    ・色持ちの目安<br>
                    ・お客様への説明トーク例
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">提案トークの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">説得力のある提案トーク</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    お客様にボブスタイルを提案するトークスクリプトを作成してください。<br><br>
                    【状況】<br>
                    ・お客様：長年ロングだったが、そろそろ変えたい<br>
                    ・悩み：似合うか不安、扱いが大変そう<br>
                    ・提案したいスタイル：顔周りレイヤーのボブ<br><br>
                    【含める内容】<br>
                    ・このスタイルをおすすめする理由<br>
                    ・お客様の不安への回答<br>
                    ・具体的なメリット<br>
                    ・自然な流れで提案する言い方
                </p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIは提案の「引き出し」を増やすツールです。最終的な判断はスタイリストの経験と目。AIで得た知識を、お客様一人ひとりに合わせてカスタマイズしましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="counseling.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：カウンセリング
        </a>
        <a href="customer-management.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：顧客カルテ管理
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
