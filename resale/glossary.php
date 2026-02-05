<?php
$page_title = '用語集 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'appendix';
$section_name = '付録';
$step_number = 14;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">用語集</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">せどり・転売でよく使われる用語と、AI活用時に知っておきたい用語をまとめました。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">せどり基本用語</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">せどり</h3>
                <p class="text-sm text-gray-700 mt-2">商品を安く仕入れて高く売ることで利益を得るビジネス。元々は古本用語で「競取り」と書く。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">電脳せどり</h3>
                <p class="text-sm text-gray-700 mt-2">ネット上で仕入れを行うせどり。自宅にいながら仕入れができる。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">店舗せどり</h3>
                <p class="text-sm text-gray-700 mt-2">実店舗に足を運んで仕入れを行うせどり。掘り出し物が見つかりやすい。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">利益率</h3>
                <p class="text-sm text-gray-700 mt-2">売上に対する利益の割合。（販売価格−原価−手数料−送料）÷ 販売価格 × 100 で計算。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">ROI（投資収益率）</h3>
                <p class="text-sm text-gray-700 mt-2">投資した金額に対する利益の割合。利益 ÷ 仕入れ価格 × 100 で計算。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">回転率</h3>
                <p class="text-sm text-gray-700 mt-2">商品がどれだけ早く売れるかの指標。回転率が高い＝売れるのが早い。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">仕入れ単価</h3>
                <p class="text-sm text-gray-700 mt-2">1つの商品を仕入れるのにかかった金額。送料や手数料も含めて計算する場合も。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">損切り</h3>
                <p class="text-sm text-gray-700 mt-2">売れ残りリスクを避けるため、仕入れ価格以下でも売却すること。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">プラットフォーム関連用語</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">FBA（Fulfillment by Amazon）</h3>
                <p class="text-sm text-gray-700 mt-2">Amazonの物流代行サービス。商品を倉庫に送れば、保管・発送・カスタマー対応をAmazonが代行。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">カート取得</h3>
                <p class="text-sm text-gray-700 mt-2">Amazonの商品ページで「カートに入れる」ボタンの表示権を得ること。売上に直結。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">らくらくメルカリ便</h3>
                <p class="text-sm text-gray-700 mt-2">メルカリとヤマト運輸が提携した配送サービス。匿名配送、追跡、補償付き。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">ゆうゆうメルカリ便</h3>
                <p class="text-sm text-gray-700 mt-2">メルカリと日本郵便が提携した配送サービス。郵便局・ローソンから発送可能。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">ネコポス</h3>
                <p class="text-sm text-gray-700 mt-2">ヤマト運輸の小型荷物配送サービス。A4・厚さ3cm以内・1kg以下の商品に最適。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">AI・ツール関連用語</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">生成AI（Generative AI）</h3>
                <p class="text-sm text-gray-700 mt-2">テキストや画像などを自動生成するAI。ChatGPT、Claude、Geminiなど。せどりでは説明文作成等に活用。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">プロンプト</h3>
                <p class="text-sm text-gray-700 mt-2">AIへの指示文。具体的で明確なプロンプトほど、期待通りの出力が得られる。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">価格改定ツール</h3>
                <p class="text-sm text-gray-700 mt-2">競合の価格に合わせて自動で価格を調整するツール。プライスター、マカドなど。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">リサーチツール</h3>
                <p class="text-sm text-gray-700 mt-2">売れ筋商品や価格推移を調査するツール。Keepa、モノレート（終了）など。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">法律・規約関連用語</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">古物商許可</h3>
                <p class="text-sm text-gray-700 mt-2">中古品を継続的に売買する際に必要な許可。管轄の警察署で申請。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">確定申告</h3>
                <p class="text-sm text-gray-700 mt-2">1年間の所得を申告し、税金を納める手続き。副業でも年20万円超で必要。</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-bold text-lime-600">転売禁止商品</h3>
                <p class="text-sm text-gray-700 mt-2">法律やプラットフォーム規約で転売が禁止されている商品。チケット、医薬品など。</p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">📚 講座完了</h3>
        <p class="text-gray-700 mb-4">お疲れさまでした！AI×せどり・転売講座の全14レッスンが完了しました。学んだ知識を活かして、せどりビジネスを成功させましょう！</p>
        <a href="index.php" class="inline-block bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">講座トップに戻る</a>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="scaling.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：スケールアップ・外注化
        </a>
        <a href="index.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            講座トップへ
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
