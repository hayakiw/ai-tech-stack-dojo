<?php
$page_title = 'バナーデザイン - AI×デザイン | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践デザイン制作';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">バナーデザイン</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">Web広告やSNS投稿に欠かせないバナー。限られたスペースで伝えたいことを効果的に表現するテクニックを学びます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">主要なバナーサイズ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">Instagramフィード</span>
                        <span class="text-gray-600">1080 x 1080px（正方形）</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">Instagramストーリー</span>
                        <span class="text-gray-600">1080 x 1920px（縦長）</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">Twitter/X投稿</span>
                        <span class="text-gray-600">1200 x 675px</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">Facebook OGP</span>
                        <span class="text-gray-600">1200 x 630px</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">YouTubeサムネイル</span>
                        <span class="text-gray-600">1280 x 720px</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-bold">Google広告（レクタングル）</span>
                        <span class="text-gray-600">300 x 250px</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">効果的なバナーの要素</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">アイキャッチ画像</h4>
                    <p class="text-sm text-gray-600">目を引く画像。商品写真や人物写真が効果的。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">キャッチコピー</h4>
                    <p class="text-sm text-gray-600">短く、インパクトのある一言。ベネフィットを伝える。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">CTA（行動喚起）</h4>
                    <p class="text-sm text-gray-600">「今すぐ購入」「詳細はこちら」などのボタン。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">ブランド要素</h4>
                    <p class="text-sm text-gray-600">ロゴ、ブランドカラーで認知度UP。</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIでバナーを作る</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 1: Geminiでコピーを考える</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のセール告知バナー用のキャッチコピーを5つ考えてください。

【内容】春の新作コレクション発売
【ターゲット】20-30代女性
【トーン】ワクワク感、新鮮さ

各コピーは15文字以内で、インパクトのあるものにしてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 2: 画像素材を生成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">春らしいファッション広告用の背景画像、
パステルピンクと白のグラデーション、
桜の花びらが舞っている、
明るく華やか、クリーンな印象、
テキストを入れるスペースを左側に確保</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 3: Canvaで組み立て</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>1. Canvaでサイズを選択（Instagram投稿など）</li>
                        <li>2. 生成した背景画像を配置</li>
                        <li>3. キャッチコピーを配置（読みやすいフォントで）</li>
                        <li>4. CTAボタン、ロゴを追加</li>
                        <li>5. 全体のバランスを調整して書き出し</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">バナーデザインのコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>情報は絞る</strong>：伝えたいことは1〜2つに。詰め込みすぎない。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>フォントは2種類まで</strong>：見出し用と本文用。統一感を。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>コントラストを強く</strong>：文字が背景に埋もれないように。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>余白を活かす</strong>：ぎゅうぎゅうにしない。余白が高級感を生む。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>モバイルでチェック</strong>：小さい画面でも読めるか確認。</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>目的に合ったサイズを選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>アイキャッチ＋コピー＋CTAが基本構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIでコピーと素材を効率的に作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>情報を絞り、余白を活かす</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="logo-design.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ロゴデザイン
            </a>
            <a href="card-design.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：名刺デザイン
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
