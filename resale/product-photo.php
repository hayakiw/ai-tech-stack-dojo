<?php
$page_title = '商品撮影・画像作成 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'sales';
$section_name = '第3部：出品・販売';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">商品撮影・画像作成</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">商品写真は売上を左右する重要な要素。AIツールを活用して、魅力的な商品画像を効率的に作成する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">商品撮影の基本</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">明るい場所で撮影</h4>
                    <p class="text-sm text-gray-600">自然光がベスト。窓際で撮影すると商品が綺麗に映る。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">白い背景を使う</h4>
                    <p class="text-sm text-gray-600">白い紙やシーツを敷くだけで清潔感アップ。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">複数アングルで撮影</h4>
                    <p class="text-sm text-gray-600">正面・側面・背面・細部・付属品を撮影。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">傷・汚れも正直に</h4>
                    <p class="text-sm text-gray-600">クレーム防止のため、ダメージ箇所は必ず撮影。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">AIを活用した画像編集</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">背景除去・加工（Canva）</h3>
                <p class="text-gray-600 mb-4">Canvaの「背景リムーバ」機能で、商品の背景を一瞬で白く加工できます。</p>
                <ol class="text-sm text-gray-600 space-y-2 list-decimal list-inside">
                    <li>Canvaに商品画像をアップロード</li>
                    <li>「画像を編集」→「背景リムーバ」をクリック</li>
                    <li>背景が自動で除去される</li>
                    <li>白い背景を追加してダウンロード</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">サムネイル画像の作成</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        メルカリの商品サムネイル画像に入れるキャッチコピーを作成してください。<br><br>
                        【商品】Nintendo Switch 本体<br>
                        【状態】美品<br>
                        【アピールポイント】動作確認済み、付属品完備<br><br>
                        【条件】<br>
                        ・5文字〜10文字程度<br>
                        ・目を引くキャッチーな表現<br>
                        ・5パターン作成
                    </p>
                </div>
                <div class="bg-lime-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">出力例：</p>
                    <ul class="text-sm text-gray-700 space-y-1">
                        <li>・「美品★即発送」</li>
                        <li>・「付属品完備！」</li>
                        <li>・「動作確認済み」</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">プラットフォーム別の画像ルール</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-lime-100">
                        <th class="p-4 text-left">プラットフォーム</th>
                        <th class="p-4 text-left">推奨サイズ</th>
                        <th class="p-4 text-left">枚数</th>
                        <th class="p-4 text-left">ポイント</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4 font-bold">メルカリ</td>
                        <td class="p-4 text-sm">正方形（1:1）</td>
                        <td class="p-4 text-sm">最大10枚</td>
                        <td class="p-4 text-sm">1枚目が超重要</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">Amazon</td>
                        <td class="p-4 text-sm">1000×1000px以上</td>
                        <td class="p-4 text-sm">最大9枚</td>
                        <td class="p-4 text-sm">白背景必須（メイン）</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-bold">ヤフオク</td>
                        <td class="p-4 text-sm">特に制限なし</td>
                        <td class="p-4 text-sm">最大10枚</td>
                        <td class="p-4 text-sm">詳細がわかる写真を</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">効率的な撮影ワークフロー</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <ol class="space-y-4">
                <li class="flex items-start">
                    <span class="bg-lime-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">1</span>
                    <div>
                        <h4 class="font-bold">撮影ブースを固定</h4>
                        <p class="text-sm text-gray-600">毎回セッティングしなくていいよう、撮影場所を決めておく。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-lime-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">2</span>
                    <div>
                        <h4 class="font-bold">まとめて撮影</h4>
                        <p class="text-sm text-gray-600">複数商品を一気に撮影し、後からまとめて編集。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-lime-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">3</span>
                    <div>
                        <h4 class="font-bold">AIで一括編集</h4>
                        <p class="text-sm text-gray-600">Canvaで背景除去・明るさ調整を一括処理。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-lime-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">4</span>
                    <div>
                        <h4 class="font-bold">テンプレート化</h4>
                        <p class="text-sm text-gray-600">サムネイルのデザインをテンプレート化して使い回す。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">1枚目の写真で購入者の80%が判断すると言われています。明るく清潔感のある写真を心がけましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="pricing.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：価格設定・利益計算
        </a>
        <a href="product-description.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：商品説明文の作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
