<?php
$page_title = 'ポートフォリオサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ポートフォリオサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">ポートフォリオサイトは自分をアピールする名刺代わり。AIを活用して、魅力的なポートフォリオを作りましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ポートフォリオに必要な要素</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">👋</span>
                    <h4 class="font-bold mt-2 mb-1">自己紹介</h4>
                    <p class="text-sm text-gray-600">名前、肩書き、プロフィール写真</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">💼</span>
                    <h4 class="font-bold mt-2 mb-1">実績・作品</h4>
                    <p class="text-sm text-gray-600">過去の制作物をビジュアルで紹介</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🛠️</span>
                    <h4 class="font-bold mt-2 mb-1">スキル</h4>
                    <p class="text-sm text-gray-600">得意な技術、使えるツール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📧</span>
                    <h4 class="font-bold mt-2 mb-1">お問い合わせ</h4>
                    <p class="text-sm text-gray-600">連絡先、問い合わせフォーム</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでポートフォリオを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 1: 構成を相談</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">Webデザイナー向けのポートフォリオサイトを作ります。
以下の条件で構成を提案してください。

【対象】フリーランスWebデザイナー
【目的】案件獲得
【ページ】1ページ（スクロール型）

セクション構成と、各セクションに含める要素を提案してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 2: ヒーローセクション</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">ポートフォリオのヒーローセクションを作成してください。

【内容】
・名前：山田太郎
・肩書き：Webデザイナー / UIデザイナー
・キャッチコピー：「使いやすさを、美しさに。」
・CTAボタン：「実績を見る」

【デザイン】
・フルスクリーン
・ミニマルで洗練されたスタイル
・アニメーション：テキストのフェードイン

Tailwind CSSでお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 3: 実績セクション</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">実績紹介のセクションを作成してください。

【レイアウト】
・3カラムのグリッド（スマホで1カラム）
・各カードに画像、タイトル、カテゴリータグ
・ホバーでオーバーレイと「詳しく見る」表示

ダミーデータ3件分で作成してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ポートフォリオのコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">実績は厳選する</h4>
                        <p class="text-sm text-gray-600">量より質。最も自信のある作品を3〜6点程度に絞る</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">プロセスも見せる</h4>
                        <p class="text-sm text-gray-600">完成品だけでなく、制作過程や工夫した点も紹介</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">更新を続ける</h4>
                        <p class="text-sm text-gray-600">定期的に新しい作品を追加して鮮度を保つ</p>
                    </div>
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
                        <span>自己紹介、実績、スキル、連絡先が基本構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIに構成→各セクションの順で作成を依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>実績は厳選して質を重視</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>定期的に更新して最新の状態を保つ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-images.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIで画像生成
            </a>
            <a href="practice-business.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：ビジネスサイト制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
