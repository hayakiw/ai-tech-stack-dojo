<?php
$page_title = '口コミ・評判管理 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">口コミ・評判管理</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">口コミは歯科医院選びの重要な判断材料。AIを活用して口コミ返信を効率化し、良い評判を増やす施策を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">口コミの重要性</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div>
                    <div class="text-4xl font-bold text-cyan-600 mb-2">90%</div>
                    <p class="text-sm text-gray-600">歯科医院選びで口コミを参考にする人の割合</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-cyan-600 mb-2">4.0★</div>
                    <p class="text-sm text-gray-600">選ばれるために必要な最低評価</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-cyan-600 mb-2">2倍</div>
                    <p class="text-sm text-gray-600">口コミに返信すると予約が増加</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">良い口コミへの返信</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">返信文作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院への良い口コミに対する返信を作成してください。<br><br>
                    【口コミ内容】<br>
                    「痛みが少なく、先生の説明も丁寧でした。スタッフの方も親切で、安心して治療を受けられました。」<br><br>
                    【条件】<br>
                    ・感謝の気持ちを伝える<br>
                    ・具体的な点（痛みへの配慮、説明）に言及<br>
                    ・今後の来院を促す<br>
                    ・200文字程度<br>
                    ・温かみのあるトーン
                </p>
            </div>
            <div class="bg-cyan-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    この度は当院をご利用いただき、また温かいお言葉をいただき誠にありがとうございます。<br><br>
                    「痛みが少ない」「説明が丁寧」と感じていただけたこと、スタッフ一同大変嬉しく思います。患者様に安心して治療を受けていただけるよう、これからも丁寧な対応を心がけてまいります。<br><br>
                    定期検診等でまたお会いできることを楽しみにしております。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">低評価の口コミへの対応</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">返信の基本姿勢</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-2">1</span>
                        <div>
                            <h4 class="font-bold">まず謝罪・お詫び</h4>
                            <p class="text-sm text-gray-600">不快な思いをさせたことへのお詫び</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-2">2</span>
                        <div>
                            <h4 class="font-bold">事実確認の姿勢</h4>
                            <p class="text-sm text-gray-600">真摯に受け止め、確認する意向を示す</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-2">3</span>
                        <div>
                            <h4 class="font-bold">改善への意思</h4>
                            <p class="text-sm text-gray-600">具体的な改善策や今後の対応を示す</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-2">4</span>
                        <div>
                            <h4 class="font-bold">個別対応への誘導</h4>
                            <p class="text-sm text-gray-600">詳しい話は直接連絡をお願いする</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">低評価への返信プロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科医院への低評価の口コミに対する返信を作成してください。<br><br>
                        【口コミ内容】<br>
                        「待ち時間が長すぎる。予約したのに30分以上待たされた。」<br><br>
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
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">口コミを増やす施策</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">タイミングを逃さない</h4>
                    <p class="text-sm text-gray-600">治療完了時、特に痛みが取れた時など、患者さんが満足しているタイミングでお願い。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">お願いの仕方</h4>
                    <p class="text-sm text-gray-600">「同じ悩みを持つ方の参考になれば」という伝え方で、押しつけがましくならないように。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">QRコードで簡単に</h4>
                    <p class="text-sm text-gray-600">口コミ投稿ページへのQRコードを作成し、会計時にお渡し。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">口コミへの返信は「投稿者」だけでなく「これから医院を探す人」も見ています。丁寧で誠実な返信を続けることで、医院の信頼性が伝わります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="google-business.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Googleビジネスプロフィール
        </a>
        <a href="web-advertising.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：Web広告・チラシ作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
