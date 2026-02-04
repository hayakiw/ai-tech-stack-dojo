<?php
$page_title = 'ビジネスサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ビジネスサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">企業やお店のホームページ（コーポレートサイト）を作成します。信頼感と情報の分かりやすさを重視しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ビジネスサイトの基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">必須ページ</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">トップページ</h4>
                        <p class="text-sm text-gray-600">会社の顔。事業内容を一目で伝える</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">サービス・事業内容</h4>
                        <p class="text-sm text-gray-600">提供するサービスの詳細</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">会社概要</h4>
                        <p class="text-sm text-gray-600">会社情報、代表挨拶、沿革など</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">お問い合わせ</h4>
                        <p class="text-sm text-gray-600">連絡先、問い合わせフォーム</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">あると良いページ</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">実績・事例</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">お客様の声</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">よくある質問</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">採用情報</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">ニュース・お知らせ</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">アクセス</span>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでビジネスサイトを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">トップページの構成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の会社のトップページを作成してください。

【会社情報】
・会社名：株式会社テクノソリューション
・事業：ITコンサルティング、システム開発
・強み：中小企業向け、丁寧なサポート

【必要なセクション】
1. ヒーロー（キャッチコピー + CTA）
2. 選ばれる理由（3つの強み）
3. サービス紹介（3つ）
4. 実績数値（◯社導入など）
5. お客様の声
6. CTA（お問い合わせへ誘導）
7. フッター

Tailwind CSSで、信頼感のあるデザインでお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">会社概要ページ</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">会社概要ページを作成してください。

【含める情報】
・会社名、代表者名
・設立年月
・資本金
・従業員数
・所在地（地図埋め込み用のエリアも）
・事業内容
・主要取引先

表形式で見やすくレイアウトしてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ビジネスサイトのポイント</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">信頼感を出す</h4>
                    <p class="text-sm text-gray-600">実績数値、資格、認証などを掲載</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">分かりやすく</h4>
                    <p class="text-sm text-gray-600">専門用語を避け、シンプルに伝える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">行動を促す</h4>
                    <p class="text-sm text-gray-600">CTAボタンを適切に配置</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">更新しやすく</h4>
                    <p class="text-sm text-gray-600">ニュースやお知らせを更新できる設計</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>トップ、サービス、会社概要、お問い合わせが基本</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>信頼感と分かりやすさを重視</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>実績や数値で説得力を高める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>CTAでお問い合わせへ誘導</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-portfolio.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ポートフォリオサイト制作
            </a>
            <a href="practice-lp.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：LP制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
