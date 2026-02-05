<?php
$page_title = '在庫管理・発注の最適化 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：メニュー・オペレーション';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">在庫管理・発注の最適化</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">食品ロスを減らし、仕入れコストを最適化。AIとスプレッドシートを活用した在庫管理・発注の効率化方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">在庫管理の課題</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">🗑️</div>
                <h3 class="font-bold text-red-600">食品ロス</h3>
                <p class="text-sm text-gray-600">発注しすぎて廃棄が発生</p>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">😰</div>
                <h3 class="font-bold text-red-600">欠品</h3>
                <p class="text-sm text-gray-600">足りなくて売り逃し</p>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">⏰</div>
                <h3 class="font-bold text-red-600">作業負担</h3>
                <p class="text-sm text-gray-600">棚卸し・発注に時間がかかる</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">スプレッドシートで在庫管理</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">在庫管理表の作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【ChatGPTプロンプト】<br>
                    飲食店の在庫管理用スプレッドシートのテンプレートを作成してください。<br><br>
                    【必要な項目】<br>
                    ・食材名<br>
                    ・カテゴリ（野菜、肉、魚、乾物など）<br>
                    ・単位（kg、個、本など）<br>
                    ・現在庫数<br>
                    ・適正在庫数（最小）<br>
                    ・適正在庫数（最大）<br>
                    ・発注点（この数を下回ったら発注）<br>
                    ・発注単位<br>
                    ・仕入れ先<br>
                    ・単価<br><br>
                    Googleスプレッドシートで使える関数も提案してください。
                </p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">便利な関数例</h3>
            <div class="space-y-4 text-sm">
                <div class="bg-gray-50 p-3 rounded">
                    <code class="text-amber-600">=IF(現在庫&lt;発注点, "要発注", "OK")</code>
                    <p class="text-gray-600 mt-1">発注が必要かどうかを自動判定</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <code class="text-amber-600">=現在庫*単価</code>
                    <p class="text-gray-600 mt-1">在庫金額を自動計算</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <code class="text-amber-600">=SUMIF(カテゴリ列, "野菜", 在庫金額列)</code>
                    <p class="text-gray-600 mt-1">カテゴリ別の在庫金額を集計</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AIで需要予測</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">発注量の予測</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下の売上データから、来週の発注量を予測してください。<br><br>
                    【過去4週間の売上データ】<br>
                    ・1週目：カルボナーラ 45食、ペペロンチーノ 32食<br>
                    ・2週目：カルボナーラ 52食、ペペロンチーノ 28食<br>
                    ・3週目：カルボナーラ 48食、ペペロンチーノ 35食<br>
                    ・4週目：カルボナーラ 55食、ペペロンチーノ 30食<br><br>
                    【材料】<br>
                    カルボナーラ1食：パスタ100g、ベーコン30g、卵1個<br>
                    ペペロンチーノ1食：パスタ100g、にんにく5g<br><br>
                    【条件】<br>
                    ・来週の予測販売数<br>
                    ・必要な材料量<br>
                    ・10%のバッファを含めた発注量
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">食品ロス削減のコツ</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                <div>
                    <h4 class="font-bold">先入れ先出しの徹底</h4>
                    <p class="text-sm text-gray-600">古いものから使う。日付管理をスプレッドシートで記録。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                <div>
                    <h4 class="font-bold">少量・頻回発注</h4>
                    <p class="text-sm text-gray-600">まとめ買いより、必要な分だけ頻繁に発注。鮮度も向上。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                <div>
                    <h4 class="font-bold">余った食材の活用</h4>
                    <p class="text-sm text-gray-600">AIに「〇〇が余った時のアレンジレシピ」を聞いて日替わりメニューに。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                <div>
                    <h4 class="font-bold">廃棄記録の分析</h4>
                    <p class="text-sm text-gray-600">何がどれだけ廃棄されたかを記録し、AIで傾向分析。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">発注業務の効率化</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">発注リストの自動生成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下の在庫データから、本日の発注リストを作成してください。<br><br>
                    【在庫データ】<br>
                    ・トマト：現在5kg、発注点10kg → 要発注<br>
                    ・玉ねぎ：現在8kg、発注点5kg → OK<br>
                    ・パスタ：現在3kg、発注点5kg → 要発注<br>
                    ・オリーブオイル：現在2本、発注点3本 → 要発注<br><br>
                    【出力形式】<br>
                    仕入れ先ごとにまとめて、発注書形式で出力してください。
                </p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">在庫管理は「記録」が命です。まずはシンプルなスプレッドシートから始めて、データを蓄積しましょう。データが貯まれば、AIによる予測精度も上がっていきます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="image-generation.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI画像生成
        </a>
        <a href="staff-training.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：スタッフ教育
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
