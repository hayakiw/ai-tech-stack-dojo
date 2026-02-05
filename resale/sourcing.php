<?php
$page_title = '仕入れ先の開拓 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'research';
$section_name = '第2部：リサーチ・仕入れ';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">仕入れ先の開拓</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">安定して利益を出すには、良い仕入れ先の確保が重要。AIを活用して仕入れ先を効率的に開拓する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">主な仕入れ先</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-lime-600 mb-3">店舗仕入れ</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・ブックオフ、ハードオフ</li>
                    <li>・ドン・キホーテ</li>
                    <li>・家電量販店のワゴンセール</li>
                    <li>・ホームセンター</li>
                    <li>・ドラッグストア</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-lime-600 mb-3">ネット仕入れ</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・楽天市場（ポイント還元）</li>
                    <li>・ヤフーショッピング</li>
                    <li>・Amazon（タイムセール）</li>
                    <li>・メルカリ・ヤフオク</li>
                    <li>・海外サイト（eBay、AliExpress）</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">仕入れ先分析プロンプト</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">店舗仕入れの攻略法</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【店舗名】ブックオフ でせどり仕入れをする際の攻略法を教えてください。<br><br>
                        【知りたいこと】<br>
                        ・狙い目の商品カテゴリ<br>
                        ・値札の見方・値付けの法則<br>
                        ・セール時期・曜日<br>
                        ・効率的な回り方<br>
                        ・仕入れ判断のポイント<br><br>
                        初心者向けに具体的に教えてください。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">ネット仕入れの戦略</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        楽天市場でせどり仕入れをする際のポイント還元を最大化する方法を教えてください。<br><br>
                        【知りたいこと】<br>
                        ・ポイントアップの条件<br>
                        ・お買い物マラソンの活用法<br>
                        ・SPU（スーパーポイントアッププログラム）の攻略<br>
                        ・仕入れに適したタイミング<br>
                        ・実質仕入れ価格の計算方法
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">卸・メーカー仕入れ</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">卸サイト・問い合わせ文作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    卸業者・メーカーへの取引開始の問い合わせメールを作成してください。<br><br>
                    【事業形態】個人事業主<br>
                    【販売先】Amazon、楽天市場<br>
                    【取り扱い希望商品】〇〇<br><br>
                    【条件】<br>
                    ・ビジネスマナーを守った丁寧な文章<br>
                    ・取引条件の確認（最小ロット、支払条件）<br>
                    ・信頼感を与える自己紹介<br>
                    ・返信しやすい形式
                </p>
            </div>
            <div class="bg-lime-50 p-4 rounded">
                <p class="text-sm text-gray-700"><strong>主な卸サイト：</strong>NETSEA、スーパーデリバリー、卸の達人、TopSeller など</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">仕入れ先開拓のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">複数の仕入れルートを持つ</h4>
                    <p class="text-sm text-gray-600">一つに依存せず、店舗・ネット・卸など複数確保する。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">ポイント・クーポンを活用</h4>
                    <p class="text-sm text-gray-600">ネット仕入れはポイント還元で実質仕入れ価格を下げる。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">セール情報をチェック</h4>
                    <p class="text-sm text-gray-600">決算期、季節の変わり目、閉店セールを狙う。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">仕入れ記録をつける</h4>
                    <p class="text-sm text-gray-600">どこで何を仕入れたか記録し、リピート仕入れに活かす。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">良い仕入れ先を見つけたら、定期的に通って関係を構築しましょう。店員さんと仲良くなると、セール情報を教えてもらえることもあります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="product-research.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：リサーチ・商品選定
        </a>
        <a href="pricing.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：価格設定・利益計算
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
