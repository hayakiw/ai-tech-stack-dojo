<?php
$page_title = 'AI画像生成でメニュー写真・販促物作成 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：メニュー・オペレーション';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI画像生成でメニュー写真・販促物作成</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">プロのカメラマンやデザイナーに依頼しなくても、AIを使えば魅力的なビジュアルを作成できます。メニュー写真、チラシ、SNS用画像の作り方を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AI画像生成ツール</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3">DALL-E（ChatGPT Plus内）</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• ChatGPT Plusに含まれる</li>
                    <li>• 日本語プロンプト対応</li>
                    <li>• 商用利用可能</li>
                    <li>• 料理画像の生成が得意</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3">Canva AI</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• デザインツールと統合</li>
                    <li>• テンプレートが豊富</li>
                    <li>• チラシ・メニュー表に最適</li>
                    <li>• 無料プランあり</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">料理画像の生成</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">料理写真のプロンプト例</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【DALL-Eプロンプト】<br><br>
                    A professional food photography of carbonara pasta,<br>
                    served on a white ceramic plate,<br>
                    with bacon, egg yolk on top, parmesan cheese,<br>
                    steam rising, wooden table background,<br>
                    natural lighting from window,<br>
                    shallow depth of field, appetizing, high quality
                </p>
            </div>
            <div class="bg-amber-50 p-4 rounded">
                <p class="text-sm"><strong>💡 ヒント：</strong>英語で指示した方が精度が高い場合があります。ChatGPTに「このプロンプトを英語に翻訳して」と頼むと便利です。</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">良い画像を生成するコツ</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">具体的に描写する</span>
                        <p class="text-sm text-gray-600">「パスタ」ではなく「カルボナーラ、卵黄のせ、パルメザンチーズ」</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">お皿や背景を指定</span>
                        <p class="text-sm text-gray-600">「白い丸皿」「木のテーブル」「和食器」など</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">ライティングを指定</span>
                        <p class="text-sm text-gray-600">「自然光」「窓からの光」「暖かい照明」</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">スタイルを指定</span>
                        <p class="text-sm text-gray-600">「プロのフード写真」「インスタ映え」「食欲をそそる」</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">Canvaでメニュー表・チラシ作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">Canvaの活用方法</h3>
            <ol class="space-y-4">
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">テンプレートを選ぶ</h4>
                        <p class="text-sm text-gray-600">「メニュー表」「チラシ」「SNS投稿」などで検索し、イメージに近いテンプレートを選択。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">写真を差し替え</h4>
                        <p class="text-sm text-gray-600">実際の料理写真、またはAI生成画像をアップロードして差し替え。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">テキストを編集</h4>
                        <p class="text-sm text-gray-600">店名、メニュー名、価格、説明文を入力。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                    <div>
                        <h4 class="font-bold">AIでコピー生成</h4>
                        <p class="text-sm text-gray-600">Canva内の「Magic Write」機能でキャッチコピーを自動生成。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">5</span>
                    <div>
                        <h4 class="font-bold">ダウンロード・印刷</h4>
                        <p class="text-sm text-gray-600">PDF、PNG、JPGで書き出し。印刷はコンビニプリントでもOK。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">活用シーン別アイデア</h2>

        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">📋 メニュー表</h4>
                <p class="text-sm text-gray-600">季節メニューの追加、新メニューの紹介用に</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">📱 SNS投稿画像</h4>
                <p class="text-sm text-gray-600">Instagram、Xの投稿用正方形画像</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">📄 チラシ・フライヤー</h4>
                <p class="text-sm text-gray-600">ポスティング、店頭配布用</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">🎫 クーポン</h4>
                <p class="text-sm text-gray-600">LINE配信用、店頭配布用</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">🪧 店頭POP</h4>
                <p class="text-sm text-gray-600">本日のおすすめ、季節のお知らせ</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h4 class="font-bold mb-2">📧 メルマガ画像</h4>
                <p class="text-sm text-gray-600">ニュースレター、お知らせ用</p>
            </div>
        </div>
    </section>

    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8">
        <h4 class="font-bold text-red-700 mb-2">注意点</h4>
        <ul class="text-sm text-red-700 space-y-1">
            <li>• AI生成画像は実際の料理と異なることを理解しておく</li>
            <li>• メニュー表に使う場合は「イメージ画像」と明記することを推奨</li>
            <li>• 可能であれば実際の料理写真を撮影して使用</li>
        </ul>
    </div>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AI画像生成は「アイデア出し」や「仮のビジュアル作成」に最適です。最終的には実際の料理写真を使うのがベストですが、スピード重視の場面ではAI画像が大活躍します。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="menu-development.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：メニュー開発
        </a>
        <a href="inventory-management.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：在庫管理・発注最適化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
