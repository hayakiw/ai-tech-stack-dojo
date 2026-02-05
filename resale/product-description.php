<?php
$page_title = '商品説明文の作成 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'sales';
$section_name = '第3部：出品・販売';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">商品説明文の作成</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">商品説明文は購入の決め手になる重要な要素。AIを活用して、魅力的で検索に強い説明文を効率的に作成する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">メルカリ向け説明文</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">商品説明文プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    メルカリ出品用の商品説明文を作成してください。<br><br>
                    【商品情報】<br>
                    ・商品名：Nintendo Switch 本体<br>
                    ・状態：中古・美品<br>
                    ・付属品：本体、ドック、Joy-Con（L/R）、ACアダプター、HDMIケーブル<br>
                    ・購入時期：2022年<br>
                    ・使用頻度：週1回程度<br>
                    ・動作確認：済み<br>
                    ・傷・汚れ：なし<br><br>
                    【条件】<br>
                    ・購買意欲を高める文章<br>
                    ・検索に引っかかるキーワードを含める<br>
                    ・状態を正直に記載<br>
                    ・400文字程度<br>
                    ・絵文字を適度に使用
                </p>
            </div>
            <div class="bg-lime-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    ご覧いただきありがとうございます<br><br>
                    【商品】Nintendo Switch 本体セット<br><br>
                    2022年に購入し、週1回程度の使用でした。<br>
                    目立つ傷や汚れはなく、美品です。<br><br>
                    ★動作確認済み<br>
                    ★初期化済み<br>
                    ★すぐに遊べます<br><br>
                    【付属品】<br>
                    ・Switch本体<br>
                    ・Joy-Con（L）（R）<br>
                    ・ドック<br>
                    ・ACアダプター<br>
                    ・HDMIケーブル<br><br>
                    即購入OK！<br>
                    24時間以内に発送いたします。<br><br>
                    #Nintendo #Switch #ニンテンドースイッチ #ゲーム機 #任天堂
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">Amazon向け商品説明</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">商品タイトル・説明文プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    Amazon出品用の商品タイトルと説明文を作成してください。<br><br>
                    【商品】〇〇〇<br>
                    【ブランド】〇〇<br>
                    【型番】〇〇〇<br>
                    【特徴】〇〇〇<br><br>
                    【作成してほしいもの】<br>
                    1. 商品タイトル（200文字以内、検索キーワードを含む）<br>
                    2. 商品説明（箇条書き5点）<br>
                    3. 商品紹介コンテンツ用の説明文<br><br>
                    【条件】<br>
                    ・SEOを意識したキーワード配置<br>
                    ・購入者のメリットを強調<br>
                    ・Amazonのガイドラインに準拠
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">カテゴリ別テンプレート</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">アパレル用</h3>
                <div class="bg-gray-100 p-4 rounded">
                    <p class="text-sm font-mono">
                        以下のアパレル商品の説明文を作成してください。<br><br>
                        【ブランド】<br>
                        【アイテム】<br>
                        【サイズ】<br>
                        【カラー】<br>
                        【素材】<br>
                        【状態】<br>
                        【実寸】着丈/身幅/肩幅/袖丈<br><br>
                        サイズ感の参考になる情報も含めてください。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">家電・ガジェット用</h3>
                <div class="bg-gray-100 p-4 rounded">
                    <p class="text-sm font-mono">
                        以下の家電製品の説明文を作成してください。<br><br>
                        【メーカー】<br>
                        【製品名】<br>
                        【型番】<br>
                        【購入時期】<br>
                        【動作確認】<br>
                        【付属品】<br>
                        【状態】<br><br>
                        スペック情報と動作保証について明記してください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">説明文作成のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">検索キーワードを含める</h4>
                    <p class="text-sm text-gray-600">商品名、ブランド名、型番、関連ワードを盛り込む。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">状態は正直に</h4>
                    <p class="text-sm text-gray-600">傷や使用感を隠すとクレームの原因に。正直に書くことで信頼獲得。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">購入者のメリットを強調</h4>
                    <p class="text-sm text-gray-600">「すぐ届く」「即使える」など購入後のイメージを伝える。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">読みやすいレイアウト</h4>
                    <p class="text-sm text-gray-600">改行・箇条書き・記号を使って見やすく整理。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで生成した説明文は必ず確認・修正しましょう。商品の状態や付属品は実物と照らし合わせて、正確な情報を記載してください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="product-photo.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：商品撮影・画像作成
        </a>
        <a href="listing-strategy.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：出品・販売戦略
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
