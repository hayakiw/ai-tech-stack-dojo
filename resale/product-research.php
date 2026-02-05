<?php
$page_title = 'リサーチ・商品選定 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'research';
$section_name = '第2部：リサーチ・仕入れ';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">リサーチ・商品選定</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">せどりで最も重要なのがリサーチ。AIを活用して、売れる商品を効率的に見つける方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">売れ筋カテゴリの分析</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">カテゴリ分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    せどり・転売で利益が出やすい商品カテゴリを分析してください。<br><br>
                    【条件】<br>
                    ・初心者でも取り組みやすい<br>
                    ・仕入れ価格1万円以下<br>
                    ・メルカリ・Amazonで販売<br><br>
                    【出力形式】<br>
                    ・カテゴリ名<br>
                    ・おすすめの理由<br>
                    ・具体的な商品例<br>
                    ・仕入れ先の候補<br>
                    ・注意点<br><br>
                    5つのカテゴリを提案してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">トレンド商品の調査</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">季節商品リサーチ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【月】を教えてください。その月に需要が高まる商品を分析してください。<br><br>
                        【出力形式】<br>
                        ・商品カテゴリ<br>
                        ・具体的な商品例<br>
                        ・需要が高まる理由<br>
                        ・仕入れのタイミング<br>
                        ・販売のタイミング<br><br>
                        10個の商品カテゴリを提案してください。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">イベント関連商品</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下のイベントに関連して需要が高まる商品を分析してください。<br><br>
                        【イベント】クリスマス<br><br>
                        【条件】<br>
                        ・せどりで利益が出やすい商品<br>
                        ・仕入れ〜販売のスケジュール<br>
                        ・価格帯別（1000円以下/1000-5000円/5000円以上）<br><br>
                        それぞれ5つずつ提案してください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">商品の需要・相場調査</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">商品分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の商品のせどり適性を分析してください。<br><br>
                    【商品名】〇〇〇<br><br>
                    【分析項目】<br>
                    ・需要の安定性（一時的なブーム or 継続的な需要）<br>
                    ・競合の多さ（出品者数の目安）<br>
                    ・価格変動の傾向<br>
                    ・仕入れやすさ<br>
                    ・保管・発送のしやすさ<br>
                    ・リスク要因<br>
                    ・総合評価（5段階）<br><br>
                    せどり初心者向けにアドバイスも添えてください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">リサーチのポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">回転率を意識する</h4>
                    <p class="text-sm text-gray-600">利益額より回転率。売れ残りリスクを減らすことが重要。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">得意ジャンルを作る</h4>
                    <p class="text-sm text-gray-600">最初は1-2カテゴリに絞って専門性を高める。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">実際の販売データを確認</h4>
                    <p class="text-sm text-gray-600">AIの分析は参考程度に。メルカリの「売り切れ」検索で実績確認。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">規約違反に注意</h4>
                    <p class="text-sm text-gray-600">チケット、医薬品など転売禁止商品は絶対に扱わない。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-yellow-50 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-yellow-700 mb-3">⚠️ 注意事項</h3>
        <ul class="text-sm text-yellow-700 space-y-2">
            <li>・AIの情報は最新でない場合があります。必ず実際の相場を確認してください。</li>
            <li>・各プラットフォームの利用規約を確認し、禁止商品は扱わないでください。</li>
            <li>・古物商許可が必要な場合があります。継続的な転売を行う場合は取得を検討してください。</li>
        </ul>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIはリサーチの「方向性」を示してくれます。最終的な仕入れ判断は、実際の販売データと自分の経験を元に行いましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI活用の準備
        </a>
        <a href="sourcing.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：仕入れ先の開拓
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
