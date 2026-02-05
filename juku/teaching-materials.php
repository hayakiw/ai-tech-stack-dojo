<?php
$page_title = '教材・問題作成 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'teaching';
$section_name = '第3部：教務・授業支援';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">教材・問題作成</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">AIを活用してオリジナル問題や解説を効率的に作成。生徒のレベルに合わせた教材作りのテクニックを学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">問題作成の基本プロンプト</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">数学問題作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の条件で数学の問題を作成してください。<br><br>
                    【条件】<br>
                    ・学年：中学2年生<br>
                    ・単元：一次関数<br>
                    ・難易度：基礎〜標準<br>
                    ・問題数：10問<br><br>
                    【問題の種類】<br>
                    ・傾きと切片を求める問題：3問<br>
                    ・式からグラフを描く問題：2問<br>
                    ・2点から式を求める問題：3問<br>
                    ・文章題：2問<br><br>
                    【出力形式】<br>
                    ・問題文<br>
                    ・解答<br>
                    ・解説（つまずきやすいポイントを含む）
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">教科別の問題作成例</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">英語（文法問題）</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        中学2年生向けの英語文法問題を作成してください。<br><br>
                        【単元】過去形・過去進行形<br>
                        【問題形式】<br>
                        ・空欄補充：5問<br>
                        ・並べ替え：3問<br>
                        ・英作文：2問<br><br>
                        日本語訳と解説も付けてください。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">国語（読解問題）</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        中学生向けの国語読解問題を作成してください。<br><br>
                        【文章のテーマ】環境問題に関する説明文<br>
                        【文章の長さ】400〜500字程度<br>
                        【問題】<br>
                        ・内容理解：3問<br>
                        ・語句の意味：2問<br>
                        ・記述問題：1問<br><br>
                        模範解答と採点基準も作成してください。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">理科（実験・観察問題）</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        中学2年生向けの理科問題を作成してください。<br><br>
                        【単元】電流と磁界<br>
                        【問題タイプ】<br>
                        ・知識問題：3問<br>
                        ・実験の手順・考察問題：2問<br>
                        ・計算問題：2問<br><br>
                        図や表が必要な場合は説明も付けてください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">レベル別問題の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">同じ単元で3レベル作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    「二次方程式」の問題を3つの難易度で作成してください。<br><br>
                    【基礎レベル】<br>
                    ・因数分解で解ける問題：3問<br>
                    ・目標：公式の使い方を定着させる<br><br>
                    【標準レベル】<br>
                    ・解の公式を使う問題：3問<br>
                    ・目標：解の公式を正確に使える<br><br>
                    【発展レベル】<br>
                    ・文章題：2問<br>
                    ・目標：式を立てて解ける<br><br>
                    各レベルの問題・解答・解説を作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">解説の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">分かりやすい解説プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の問題の解説を、生徒が理解しやすいように作成してください。<br><br>
                    【問題】<br>
                    y = 2x + 3 のグラフが点(a, 7)を通るとき、aの値を求めなさい。<br><br>
                    【解説に含める内容】<br>
                    ・考え方の手順（ステップバイステップ）<br>
                    ・なぜその計算をするのか<br>
                    ・よくある間違いと注意点<br>
                    ・類題を解くためのポイント<br><br>
                    中学2年生が理解できる言葉で説明してください。
                </p>
            </div>
        </div>
    </section>

    <div class="bg-yellow-50 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3 text-yellow-700">⚠️ 注意点</h3>
        <p class="text-gray-700">AIが作成した問題は、必ず講師が確認してください。特に計算問題の解答ミス、不適切な問題設定がないかチェックが必要です。</p>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成した問題を蓄積し、生徒のレベルに合わせて組み合わせることで、オリジナルの問題集が作れます。定期的に更新して、最新の傾向に対応しましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="curriculum-design.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：カリキュラム設計
        </a>
        <a href="learning-analytics.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：学習分析・成績管理
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
