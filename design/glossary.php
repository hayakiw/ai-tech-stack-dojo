<?php
$page_title = '用語集 - AI×デザイン | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 14;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">デザインで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#basics" class="bg-fuchsia-100 text-fuchsia-700 px-3 py-1 rounded hover:bg-fuchsia-200">デザイン基礎</a>
                <a href="#color" class="bg-pink-100 text-pink-700 px-3 py-1 rounded hover:bg-pink-200">色彩</a>
                <a href="#typography" class="bg-purple-100 text-purple-700 px-3 py-1 rounded hover:bg-purple-200">タイポグラフィ</a>
                <a href="#ai" class="bg-violet-100 text-violet-700 px-3 py-1 rounded hover:bg-violet-200">AI関連</a>
            </div>
        </div>

        <!-- デザイン基礎 -->
        <section id="basics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">デザイン基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">レイアウト</h3>
                    <p class="text-sm text-gray-600 mt-1">要素の配置・構成。デザインの骨格となる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">ホワイトスペース（余白）</h3>
                    <p class="text-sm text-gray-600 mt-1">何も配置されていない空間。読みやすさと高級感を生む。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">グリッドシステム</h3>
                    <p class="text-sm text-gray-600 mt-1">要素を整然と配置するための見えないガイド線。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">ジャンプ率</h3>
                    <p class="text-sm text-gray-600 mt-1">見出しと本文のサイズ差。大きいほどメリハリがつく。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">CTA（Call To Action）</h3>
                    <p class="text-sm text-gray-600 mt-1">行動喚起。「今すぐ購入」「詳細はこちら」などのボタンやテキスト。</p>
                </div>
            </div>
        </section>

        <!-- 色彩 -->
        <section id="color" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">色彩</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">色相</h3>
                    <p class="text-sm text-gray-600 mt-1">赤、青、黄など、色の種類・系統。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">彩度</h3>
                    <p class="text-sm text-gray-600 mt-1">色の鮮やかさ。高いと派手、低いと落ち着いた印象。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">明度</h3>
                    <p class="text-sm text-gray-600 mt-1">色の明るさ。白に近いか黒に近いか。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">補色</h3>
                    <p class="text-sm text-gray-600 mt-1">色相環で反対側にある色。組み合わせるとコントラストが強くなる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">HEXコード</h3>
                    <p class="text-sm text-gray-600 mt-1">色を16進数で表したコード。例：#FF5733</p>
                </div>
            </div>
        </section>

        <!-- タイポグラフィ -->
        <section id="typography" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">タイポグラフィ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">セリフ体（明朝体）</h3>
                    <p class="text-sm text-gray-600 mt-1">文字の端に飾り（セリフ）があるフォント。フォーマルで読みやすい。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">サンセリフ体（ゴシック体）</h3>
                    <p class="text-sm text-gray-600 mt-1">飾りのないフォント。モダンで視認性が高い。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">ウェイト</h3>
                    <p class="text-sm text-gray-600 mt-1">フォントの太さ。Light、Regular、Bold等。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">行間（リーディング）</h3>
                    <p class="text-sm text-gray-600 mt-1">テキストの行と行の間隔。読みやすさに影響。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">カーニング</h3>
                    <p class="text-sm text-gray-600 mt-1">特定の文字間の間隔調整。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">プロンプト</h3>
                    <p class="text-sm text-gray-600 mt-1">AIに与える指示・入力文。詳細なほど望む結果が得られやすい。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">画像生成AI</h3>
                    <p class="text-sm text-gray-600 mt-1">テキストから画像を生成するAI。DALL-E、Midjourney等。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">Gemini</h3>
                    <p class="text-sm text-gray-600 mt-1">Googleの生成AI。テキスト生成、画像分析、デザインアドバイスに活用可能。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">Magic Design</h3>
                    <p class="text-sm text-gray-600 mt-1">Canvaの機能。説明文からデザインを自動生成。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">ベクター画像</h3>
                    <p class="text-sm text-gray-600 mt-1">拡大しても劣化しない数式で定義された画像。SVG形式。ロゴに適する。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-fuchsia-500 to-pink-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×デザインコースを完了しました。<br>学んだことを活かして、素敵なデザインを作りましょう！</p>
                <a href="index.php" class="inline-block bg-white text-fuchsia-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
