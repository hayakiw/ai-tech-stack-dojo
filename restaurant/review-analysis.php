<?php
$page_title = 'AIでレビュー分析・顧客満足度向上 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIでレビュー分析・顧客満足度向上</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">お客様の声は宝の山。AIを使って口コミを分析し、お店の強みと改善点を発見。効果的な返信で顧客満足度を高めます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">口コミ分析の重要性</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">👍</div>
                <h3 class="font-bold mb-2">強みの発見</h3>
                <p class="text-sm text-gray-600">お客様が何を評価しているか把握し、PRポイントを明確にできます。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">🔧</div>
                <h3 class="font-bold mb-2">改善点の発見</h3>
                <p class="text-sm text-gray-600">不満の声から具体的な改善アクションを導き出せます。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AIで口コミを分析する</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">口コミ分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の口コミを分析して、お店の強みと改善点をまとめてください。<br><br>
                    【口コミ一覧】<br>
                    1. ★★★★★「料理が美味しく、特にパスタが絶品。スタッフの対応も丁寧でした。ただ、週末は混んでいて待ち時間が長かった。」<br><br>
                    2. ★★★★☆「駅近で便利。ランチのコスパが良い。駐車場がないのが残念。」<br><br>
                    3. ★★★☆☆「味は普通。店内が少し暗くて写真が撮りにくい。」<br><br>
                    4. ★★★★★「記念日に利用。サプライズの対応をしていただき感動しました！」<br><br>
                    5. ★★★★☆「子連れでも入りやすい雰囲気。キッズメニューがあると嬉しい。」<br><br>
                    【分析してほしい項目】<br>
                    1. 強み（褒められている点）<br>
                    2. 改善点（不満・要望）<br>
                    3. 優先的に対応すべきこと<br>
                    4. PRに使えるポイント
                </p>
            </div>
        </div>

        <div class="bg-amber-50 p-6 rounded-lg">
            <h4 class="font-bold mb-3">分析結果の例</h4>
            <div class="space-y-4 text-sm">
                <div>
                    <span class="font-bold text-green-600">【強み】</span>
                    <ul class="list-disc list-inside ml-4">
                        <li>料理の味（特にパスタ）</li>
                        <li>スタッフの対応の良さ</li>
                        <li>駅からのアクセス</li>
                        <li>ランチのコスパ</li>
                        <li>記念日対応の柔軟さ</li>
                    </ul>
                </div>
                <div>
                    <span class="font-bold text-red-600">【改善点】</span>
                    <ul class="list-disc list-inside ml-4">
                        <li>週末の待ち時間</li>
                        <li>駐車場の有無</li>
                        <li>店内の照明</li>
                        <li>キッズメニューの追加</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">口コミ返信をAIで効率化</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-green-600">好意的な口コミへの返信</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        以下の口コミに対する返信を作成してください。<br><br>
                        【口コミ】<br>
                        「料理が美味しく、特にカルボナーラが絶品でした！また来ます。」<br><br>
                        【条件】<br>
                        ・感謝の気持ちを伝える<br>
                        ・具体的なメニュー名に触れる<br>
                        ・再来店を促す<br>
                        ・100文字程度
                    </p>
                </div>
                <div class="bg-green-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">返信例：</p>
                    <p class="text-sm">ご来店ありがとうございます！カルボナーラを気に入っていただけて嬉しいです。シェフが毎朝手作りする自家製パスタは当店の自慢です。季節限定パスタもご用意しておりますので、ぜひまたお越しください！</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-red-600">否定的な口コミへの返信</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        以下の否定的な口コミに対する返信を作成してください。<br><br>
                        【口コミ】<br>
                        「待ち時間が長すぎる。30分以上待たされた。」<br><br>
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
                    <p class="text-sm">この度は長時間お待たせしてしまい、誠に申し訳ございませんでした。いただいたご意見を真摯に受け止め、オペレーションの改善に取り組んでまいります。ぜひまたご来店の機会をいただければ幸いです。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">口コミを増やすコツ</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">会計時にお願いする</h4>
                        <p class="text-sm text-gray-600">「よろしければGoogleで感想を教えてください」とさりげなく伝える。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">QRコードを設置</h4>
                        <p class="text-sm text-gray-600">レジ横やテーブルにGoogleレビューへのQRコードを置く。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">すべての口コミに返信</h4>
                        <p class="text-sm text-gray-600">返信があるお店は「大切にされている」と感じ、口コミが増えやすい。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-red-50 border-l-4 border-red-500 p-4 mt-4">
            <p class="text-sm text-red-700"><strong>注意：</strong>口コミ投稿の見返りに特典を提供することは、Googleのガイドライン違反です。自然な形でお願いしましょう。</p>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">口コミは「宝の山」です。定期的にAIで分析し、改善アクションにつなげましょう。また、すべての口コミに丁寧に返信することで、お店の誠実さが伝わり、新規顧客の信頼獲得にもつながります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="google-business.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Googleビジネス最適化
        </a>
        <a href="menu-development.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：メニュー・レシピ開発
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
