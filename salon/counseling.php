<?php
$page_title = 'AIでカウンセリングシートを作成 - AI×美容院経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：接客・カウンセリング';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIでカウンセリングシートを作成</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">お客様の要望を的確に把握するカウンセリングは、満足度に直結します。AIを活用して、効果的なカウンセリングシートと質問テクニックを学びましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">カウンセリングシートの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">カウンセリングシート作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    美容院の新規お客様向けカウンセリングシートを作成してください。<br><br>
                    【サロンの特徴】<br>
                    ・カラーリングが得意<br>
                    ・髪質改善メニューあり<br>
                    ・30-40代女性がメインターゲット<br><br>
                    【含めてほしい項目】<br>
                    1. 基本情報（名前、連絡先、来店きっかけ）<br>
                    2. 髪の悩み・気になること<br>
                    3. なりたいイメージ<br>
                    4. ライフスタイル（職業、スタイリング時間）<br>
                    5. アレルギー・過去のトラブル<br>
                    6. 予算・時間の希望<br><br>
                    【条件】<br>
                    ・選択式を中心に、記入しやすく<br>
                    ・5分以内で記入できる量<br>
                    ・本音を引き出せる質問設計
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">カウンセリングの質問テクニック</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">効果的な質問例を生成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    美容院のカウンセリングで使える質問例を作成してください。<br><br>
                    【シーン】初めてのお客様へのカウンセリング<br>
                    【目的】お客様の本当のニーズを引き出す<br><br>
                    【カテゴリ別に5問ずつ】<br>
                    1. 現在の髪の悩みを深掘りする質問<br>
                    2. なりたいイメージを具体化する質問<br>
                    3. ライフスタイルを把握する質問<br>
                    4. 過去の経験（良かった/悪かった）を聞く質問<br>
                    5. 次回以降の提案につなげる質問<br><br>
                    【条件】<br>
                    ・オープンクエスチョン中心<br>
                    ・お客様が答えやすい表現<br>
                    ・押しつけがましくない
                </p>
            </div>
            <div class="bg-violet-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例（悩みを深掘りする質問）：</p>
                <ul class="text-sm space-y-2">
                    <li>「普段、髪で一番気になっていることは何ですか？」</li>
                    <li>「朝のスタイリングで困っていることはありますか？」</li>
                    <li>「今の髪型で変えたいところはどこですか？」</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">お客様の要望を言語化するサポート</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">曖昧な要望を具体化</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    お客様から「なんとなくイメチェンしたい」と言われました。<br>
                    具体的なスタイルを提案するための質問と、<br>
                    想定される回答パターン、それに対する提案を考えてください。<br><br>
                    【お客様情報】<br>
                    ・30代女性<br>
                    ・現在：肩下のロング、暗めの茶色<br>
                    ・職業：事務職<br><br>
                    【出力形式】<br>
                    質問 → 想定回答 → 提案スタイル<br>
                    の形式で3パターン
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">写真を使ったカウンセリング</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-700 mb-4">お客様が持参した写真や、イメージ写真を見せながらカウンセリングする際のポイントです。</p>

            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">写真の「どこ」が好きか聞く</h4>
                        <p class="text-sm text-gray-600">「この写真のどこが気に入りましたか？」で、色なのか、長さなのか、雰囲気なのかを明確に。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">髪質・顔型の違いを説明</h4>
                        <p class="text-sm text-gray-600">「この方と同じようにするには〇〇が必要」と、具体的にできること・できないことを伝える。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">代替案を提示</h4>
                        <p class="text-sm text-gray-600">完全再現が難しい場合は「お客様の髪質だとこうアレンジすると素敵」と提案。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">カウンセリングは「聞く」ことが8割。AIで質問パターンを学び、お客様の本当のニーズを引き出せるスキルを身につけましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="hotpepper.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：ホットペッパー対策
        </a>
        <a href="style-suggestion.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：スタイル提案
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
