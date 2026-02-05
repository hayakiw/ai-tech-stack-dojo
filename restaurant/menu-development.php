<?php
$page_title = 'AIで作るメニュー・レシピ開発 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：メニュー・オペレーション';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIで作るメニュー・レシピ開発</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">新メニューのアイデア出しから、レシピ作成、原価計算まで。AIを活用して効率的にメニュー開発を行う方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">メニュー開発にAIを活用するメリット</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💡</div>
                <h3 class="font-bold">アイデアの量産</h3>
                <p class="text-sm text-gray-600">短時間で多数のアイデアを出せる</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📊</div>
                <h3 class="font-bold">トレンド分析</h3>
                <p class="text-sm text-gray-600">最新のフードトレンドを把握</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💰</div>
                <h3 class="font-bold">原価計算</h3>
                <p class="text-sm text-gray-600">利益が出るメニューを設計</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">新メニューのアイデア出し</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">季節メニューのアイデア</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    イタリアンレストランの夏季限定メニューを5つ提案してください。<br><br>
                    【条件】<br>
                    ・ターゲット：30-40代女性<br>
                    ・価格帯：1,500-2,000円<br>
                    ・特徴：さっぱり系、インスタ映え<br>
                    ・使いたい食材：トマト、バジル、シーフード<br><br>
                    【出力形式】<br>
                    各メニューについて以下を記載：<br>
                    ・メニュー名<br>
                    ・説明文（メニュー表用、50文字程度）<br>
                    ・主な食材<br>
                    ・おすすめポイント
                </p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">競合との差別化メニュー</h3>
            <div class="bg-gray-100 p-4 rounded">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    居酒屋の看板メニューを開発したいです。<br>
                    周辺の競合店にはない、話題性のあるメニューを提案してください。<br><br>
                    【お店の特徴】<br>
                    ・〇〇駅前の居酒屋<br>
                    ・ターゲット：20-30代会社員<br>
                    ・強み：日本酒の品揃え<br><br>
                    【条件】<br>
                    ・SNSで話題になりやすい<br>
                    ・日本酒に合う<br>
                    ・原価率30%以下で実現可能
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">レシピ作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">詳細レシピの作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    「トマトとモッツァレラの冷製カッペリーニ」の<br>
                    業務用レシピを作成してください。<br><br>
                    【条件】<br>
                    ・1人前の分量<br>
                    ・調理手順は番号付きで詳細に<br>
                    ・調理時間の目安<br>
                    ・盛り付けのポイント<br>
                    ・アルバイトスタッフでも作れる難易度で<br><br>
                    【出力形式】<br>
                    1. 材料リスト（分量付き）<br>
                    2. 下準備<br>
                    3. 調理手順<br>
                    4. 盛り付け<br>
                    5. 注意点・コツ
                </p>
            </div>

            <div class="bg-amber-50 p-4 rounded">
                <p class="text-sm"><strong>💡 ヒント：</strong>AIが出したレシピは必ず実際に試作してください。味の微調整や手順の改善が必要な場合があります。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">原価計算</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">メニューの原価率を計算</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のメニューの原価計算をしてください。<br><br>
                    【メニュー】カルボナーラ<br>
                    【販売価格】1,200円<br><br>
                    【材料と仕入れ価格】<br>
                    ・パスタ（乾麺100g）：仕入れ500g 300円<br>
                    ・ベーコン（30g）：仕入れ200g 400円<br>
                    ・卵（1個）：仕入れ10個 250円<br>
                    ・パルメザンチーズ（20g）：仕入れ100g 500円<br>
                    ・生クリーム（50ml）：仕入れ200ml 300円<br>
                    ・黒胡椒：少量（計算から除外）<br><br>
                    【計算してほしいこと】<br>
                    1. 1人前あたりの原価<br>
                    2. 原価率<br>
                    3. 粗利益<br>
                    4. 目標原価率30%にするための価格提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">メニュー表の説明文作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">魅力的なメニュー説明</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のメニューの説明文を作成してください。<br><br>
                    【メニュー名】自家製ミートソースのボロネーゼ<br>
                    【特徴】<br>
                    ・牛肉100%使用<br>
                    ・6時間煮込み<br>
                    ・自家製の生パスタ<br>
                    ・パルメザンチーズたっぷり<br><br>
                    【条件】<br>
                    ・30-50文字<br>
                    ・食欲をそそる表現<br>
                    ・素材のこだわりが伝わる
                </p>
            </div>
            <div class="bg-amber-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm">「牛肉100%を6時間じっくり煮込んだ濃厚ミートソースと、もちもち自家製生パスタの贅沢な一皿」</p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIはアイデア出しや下書き作成に優れていますが、最終的な味の判断は人間の仕事です。AIのアイデアをベースに、お店の個性を加えて、オリジナルメニューを完成させましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="review-analysis.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：レビュー分析
        </a>
        <a href="image-generation.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：AI画像生成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
