<?php
$page_title = '在庫・売上管理 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：運営・スケールアップ';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">在庫・売上管理</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">せどりビジネスを継続・拡大するには、在庫と売上の管理が必須。AIを活用して効率的に管理する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">管理すべき項目</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-bold text-lime-600 mb-3">在庫管理</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>・商品名・型番</li>
                        <li>・仕入れ日・仕入れ価格</li>
                        <li>・仕入れ先</li>
                        <li>・保管場所</li>
                        <li>・出品状況</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lime-600 mb-3">売上管理</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>・販売日・販売価格</li>
                        <li>・手数料・送料</li>
                        <li>・利益額・利益率</li>
                        <li>・販売プラットフォーム</li>
                        <li>・月別・カテゴリ別集計</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">管理表の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">管理表テンプレート作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    せどりの在庫・売上管理用のスプレッドシートを設計してください。<br><br>
                    【必要なシート】<br>
                    1. 在庫管理シート<br>
                    2. 売上管理シート<br>
                    3. 月次集計シート<br>
                    4. 仕入れ先管理シート<br><br>
                    【各シートに含める項目】<br>
                    ・列名（ヘッダー）<br>
                    ・自動計算が必要な項目と計算式<br>
                    ・条件付き書式の提案<br><br>
                    【条件】<br>
                    ・Googleスプレッドシートで使用<br>
                    ・初心者でも使いやすい設計<br>
                    ・集計が自動化される仕組み
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">データ分析</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">売上分析プロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下の売上データを分析して、改善提案をしてください。<br><br>
                        【月間データ】<br>
                        ・売上：150,000円<br>
                        ・仕入れ：80,000円<br>
                        ・手数料：15,000円<br>
                        ・送料：8,000円<br>
                        ・利益：47,000円<br>
                        ・販売個数：35個<br>
                        ・平均利益率：31%<br><br>
                        【分析してほしいこと】<br>
                        ・現状の評価<br>
                        ・改善すべき点<br>
                        ・利益を増やすための具体策<br>
                        ・来月の目標設定
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">滞留在庫の分析</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下の滞留在庫について、対策を提案してください。<br><br>
                        【滞留在庫】<br>
                        ・商品A：仕入れ2,000円、出品価格4,000円、60日経過<br>
                        ・商品B：仕入れ5,000円、出品価格8,000円、45日経過<br>
                        ・商品C：仕入れ1,500円、出品価格3,000円、30日経過<br><br>
                        【提案してほしいこと】<br>
                        ・優先順位（どれから対処すべきか）<br>
                        ・商品ごとの具体的な対策<br>
                        ・損切りラインの提案<br>
                        ・今後の仕入れへの教訓
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">管理のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">仕入れ時に必ず記録</h4>
                    <p class="text-sm text-gray-600">後から入力しようとすると忘れる。仕入れたその日に記録を。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">週1で棚卸し</h4>
                    <p class="text-sm text-gray-600">在庫の実物と管理表を照合。売れ残りを早期発見。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">月次で振り返り</h4>
                    <p class="text-sm text-gray-600">月末に売上・利益を集計し、翌月の目標を設定。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">確定申告に備える</h4>
                    <p class="text-sm text-gray-600">仕入れレシート、売上データは税務申告に必要。整理して保管。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">数字を把握することで「なんとなく」から「根拠ある判断」に変わります。面倒でも記録を続けることが成功への近道です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="listing-strategy.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：出品・販売戦略
        </a>
        <a href="customer-service.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：顧客対応・評価管理
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
