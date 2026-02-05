<?php
$page_title = '口コミ・評判管理 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">口コミ・評判管理</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">口コミは塾選びの重要な判断材料。AIを活用して口コミ返信を効率化し、良い評判を増やす施策を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">口コミの重要性</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">87%</div>
                    <p class="text-sm text-gray-600">塾選びで口コミを参考にする保護者の割合</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">4.0★</div>
                    <p class="text-sm text-gray-600">選ばれるために必要な最低評価</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">2倍</div>
                    <p class="text-sm text-gray-600">口コミに返信すると問い合わせが増加</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">良い口コミへの返信</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">返信文作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾への良い口コミに対する返信を作成してください。<br><br>
                    【口コミ内容】<br>
                    「子どもが勉強を好きになりました。先生が優しく、質問しやすい雰囲気です。成績も上がり、感謝しています。」<br><br>
                    【条件】<br>
                    ・感謝の気持ちを伝える<br>
                    ・具体的な点（質問しやすい雰囲気）に言及<br>
                    ・今後も頑張る姿勢を示す<br>
                    ・200文字程度<br>
                    ・温かみのあるトーン
                </p>
            </div>
            <div class="bg-indigo-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    温かいお言葉をいただき、誠にありがとうございます。お子様が勉強を好きになってくださったとのこと、講師一同大変嬉しく思います。<br><br>
                    「質問しやすい雰囲気」を感じていただけているのは、私たちが大切にしていることの一つです。分からないことをそのままにせず、気軽に聞ける環境づくりを今後も続けてまいります。<br><br>
                    お子様のさらなる成長をサポートできるよう、講師一同努力してまいります。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">低評価の口コミへの対応</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">返信の基本姿勢</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="text-indigo-500 mr-2">1</span>
                        <div>
                            <h4 class="font-bold">まず謝罪・お詫び</h4>
                            <p class="text-sm text-gray-600">不快な思いをさせたことへのお詫び</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-indigo-500 mr-2">2</span>
                        <div>
                            <h4 class="font-bold">事実確認の姿勢</h4>
                            <p class="text-sm text-gray-600">真摯に受け止め、確認する意向を示す</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-indigo-500 mr-2">3</span>
                        <div>
                            <h4 class="font-bold">改善への意思</h4>
                            <p class="text-sm text-gray-600">具体的な改善策や今後の対応を示す</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-indigo-500 mr-2">4</span>
                        <div>
                            <h4 class="font-bold">個別対応への誘導</h4>
                            <p class="text-sm text-gray-600">詳しい話は直接連絡をお願いする</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">低評価への返信プロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        学習塾への低評価の口コミに対する返信を作成してください。<br><br>
                        【口コミ内容】<br>
                        「授業料が高い割に成績が上がらなかった。講師の当たり外れがある。」<br><br>
                        【条件】<br>
                        ・まず不快な思いへのお詫び<br>
                        ・言い訳はしない<br>
                        ・改善への姿勢を示す<br>
                        ・直接のご連絡をお願いする<br>
                        ・誠実で丁寧なトーン<br>
                        ・250文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">口コミを増やす施策</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">タイミングを逃さない</h4>
                    <p class="text-sm text-gray-600">成績アップ時、合格発表後など、喜びの感情があるタイミングでお願い。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">お願いの仕方</h4>
                    <p class="text-sm text-gray-600">「同じ悩みを持つ保護者の参考になれば」という伝え方で、押しつけがましくならないように。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">QRコードで簡単に</h4>
                    <p class="text-sm text-gray-600">口コミ投稿ページへのQRコードを作成し、案内を簡単に。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">口コミへの返信は「投稿者」だけでなく「これから塾を探す人」も見ています。丁寧で誠実な返信を続けることで、塾の信頼性が伝わります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="google-business.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Googleビジネスプロフィール
        </a>
        <a href="web-advertising.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：Web広告・チラシ作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
