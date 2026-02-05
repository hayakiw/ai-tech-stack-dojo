<?php
$page_title = 'AIでレビュー分析・顧客満足度向上 - AI×美容院経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIでレビュー分析・顧客満足度向上</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">お客様の声は宝の山。AIを使ってGoogle・ホットペッパーの口コミを分析し、サロンの強みと改善点を発見。効果的な返信で顧客満足度を高めます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIで口コミを分析する</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-violet-600">口コミ分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の口コミを分析して、サロンの強みと改善点をまとめてください。<br><br>
                    【口コミ一覧】<br>
                    1. ★★★★★「カラーがとても綺麗で、色持ちも良いです。スタイリストさんの提案も的確でした。ただ、予約が取りにくいのが難点。」<br><br>
                    2. ★★★★☆「髪質改善トリートメントで髪がツヤツヤに。価格は少し高めですが、満足です。」<br><br>
                    3. ★★★☆☆「技術は良いけど、店内が少し狭くて隣の会話が聞こえる。」<br><br>
                    4. ★★★★★「いつも丁寧にカウンセリングしてくれる。イメージ通りに仕上げてくれます！」<br><br>
                    5. ★★★★☆「駅から近くて便利。ドリンクサービスも嬉しい。次回予約がその場で取れると良い。」<br><br>
                    【分析してほしい項目】<br>
                    1. 強み（褒められている点）<br>
                    2. 改善点（不満・要望）<br>
                    3. 優先的に対応すべきこと<br>
                    4. PRに使えるポイント
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">口コミ返信をAIで効率化</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-green-600">好意的な口コミへの返信</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        以下の口コミに対する返信を作成してください。<br><br>
                        【口コミ】<br>
                        「カラーがとても綺麗で、理想通りの色になりました。スタイリストの〇〇さんの提案も素敵でした！」<br><br>
                        【条件】<br>
                        ・感謝の気持ちを伝える<br>
                        ・担当スタイリスト名を入れる<br>
                        ・次回来店を促す<br>
                        ・100文字程度<br>
                        ・親しみやすいトーン
                    </p>
                </div>
                <div class="bg-green-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">返信例：</p>
                    <p class="text-sm">この度はご来店いただきありがとうございます！〇〇も「理想通りに仕上がって良かった」ととても喜んでおります。カラーの色持ちが気になる頃、またぜひお待ちしております♪</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-red-600">否定的な口コミへの返信</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        以下の否定的な口コミに対する返信を作成してください。<br><br>
                        【口コミ】<br>
                        「予約時間に行ったのに20分以上待たされた。説明もなく不快でした。」<br><br>
                        【条件】<br>
                        ・誠実にお詫びする<br>
                        ・言い訳をしない<br>
                        ・改善への姿勢を示す<br>
                        ・再来店の機会をお願いする<br>
                        ・100文字程度
                    </p>
                </div>
                <div class="bg-red-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">返信例：</p>
                    <p class="text-sm">この度は長時間お待たせしてしまい、大変申し訳ございませんでした。ご説明もなく不快な思いをさせてしまったこと、深くお詫び申し上げます。スタッフ間の連携を見直し、改善に努めてまいります。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">口コミを増やすコツ</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">お会計時にお願いする</h4>
                        <p class="text-sm text-gray-600">「もしよろしければ、Googleで感想をいただけると嬉しいです」とさりげなく。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">サンキューカードにQRコード</h4>
                        <p class="text-sm text-gray-600">お帰りの際に渡すカードにレビューページへのQRコードを印刷。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">LINEでフォローアップ</h4>
                        <p class="text-sm text-gray-600">来店後にお礼メッセージと一緒にレビューのお願いを送る。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">すべての口コミに丁寧に返信することで、サロンの誠実さが伝わり、新規顧客の信頼獲得にもつながります。否定的な口コミにこそ、真摯な対応が大切です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="google-business.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Googleビジネス最適化
        </a>
        <a href="hotpepper.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：ホットペッパー対策
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
