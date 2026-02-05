<?php
$page_title = 'Web広告・チラシ作成 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">Web広告・チラシ作成</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">AIを活用してキャッチコピーや広告文を作成。医療広告ガイドラインに配慮しながら、効果的な宣伝物の作り方を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">キャッチコピーの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">キャッチコピー作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院の広告用キャッチコピーを10個作成してください。<br><br>
                    【医院の特徴】<br>
                    ・〇〇市の歯科医院<br>
                    ・痛みの少ない治療<br>
                    ・予防歯科に注力<br><br>
                    【ターゲット】<br>
                    ・歯医者が苦手な方<br>
                    ・子どもの歯の健康が気になる親<br><br>
                    【条件】<br>
                    ・20文字以内<br>
                    ・医療広告ガイドラインに配慮<br>
                    ・「最高」「絶対」など誇大表現は避ける<br>
                    ・安心感を与える表現
                </p>
            </div>
            <div class="bg-cyan-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <ul class="text-sm space-y-1">
                    <li>• 「笑顔で帰れる歯医者さん」</li>
                    <li>• 「痛みに配慮した丁寧な治療」</li>
                    <li>• 「家族みんなの歯を守りたい」</li>
                    <li>• 「予防で守る、お口の健康」</li>
                    <li>• 「怖くない、が当たり前に」</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">チラシの構成作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">チラシ構成のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院のチラシ構成案を作成してください。<br><br>
                    【目的】新規開業の案内<br>
                    【サイズ】A4片面<br><br>
                    【含めたい要素】<br>
                    ・キャッチコピー<br>
                    ・医院の特徴（3つ程度）<br>
                    ・診療科目<br>
                    ・診療時間・休診日<br>
                    ・アクセス・駐車場情報<br>
                    ・連絡先・地図<br><br>
                    【条件】<br>
                    ・医療広告ガイドラインに配慮<br>
                    ・レイアウトの配置も提案<br>
                    ・清潔感・安心感のあるデザインの方向性
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">リスティング広告の文案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">Google広告文の作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院のGoogle検索広告用の広告文を作成してください。<br><br>
                    【キーワード】「〇〇市 歯医者」「〇〇市 歯科」<br><br>
                    【医院の強み】<br>
                    ・痛みの少ない治療<br>
                    ・土日診療あり<br>
                    ・駅から徒歩3分<br><br>
                    【広告形式】<br>
                    ・見出し1：30文字以内<br>
                    ・見出し2：30文字以内<br>
                    ・見出し3：30文字以内<br>
                    ・説明文1：90文字以内<br>
                    ・説明文2：90文字以内<br><br>
                    【条件】<br>
                    ・医療広告ガイドラインに配慮<br>
                    ・5パターン作成
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">医療広告ガイドライン チェックリスト</h2>

        <div class="bg-yellow-50 p-6 rounded-lg">
            <h3 class="font-bold text-yellow-700 mb-4">広告作成時の確認事項</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="text-yellow-600 mr-2">□</span>
                    <span class="text-sm">「最高」「最先端」「絶対」などの誇大表現がないか</span>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 mr-2">□</span>
                    <span class="text-sm">他院との比較優良広告になっていないか</span>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 mr-2">□</span>
                    <span class="text-sm">ビフォーアフター写真を使用していないか</span>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 mr-2">□</span>
                    <span class="text-sm">患者の体験談（効果を保証する形式）がないか</span>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 mr-2">□</span>
                    <span class="text-sm">自由診療の料金表示は適切か</span>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">歯科医院の広告は医療広告ガイドラインの規制を受けます。AIで作成した文案は必ず確認し、不適切な表現がないかチェックしましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="review-management.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：口コミ・評判管理
        </a>
        <a href="patient-communication.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：患者コミュニケーション
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
