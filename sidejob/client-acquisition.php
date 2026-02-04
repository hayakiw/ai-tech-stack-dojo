<?php
$page_title = '案件獲得の方法 - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">案件獲得の方法</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">スキルがあっても案件がなければ収入にならない。クラウドソーシングから直接営業まで、案件獲得の方法を網羅的に解説します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">案件獲得の3つのルート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🌐</div>
                        <div>
                            <h3 class="font-bold text-lg text-rose-600">クラウドソーシング</h3>
                            <p class="text-sm text-gray-600 mt-2">ランサーズ、クラウドワークス、ココナラなど。初心者が最も始めやすい。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">始めやすい</span>
                                <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs">競争激しい</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📣</div>
                        <div>
                            <h3 class="font-bold text-lg text-rose-600">SNS・ブログ経由</h3>
                            <p class="text-sm text-gray-600 mt-2">X(Twitter)、Instagram、ブログで発信→問い合わせを獲得。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">手数料なし</span>
                                <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs">時間がかかる</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🤝</div>
                        <div>
                            <h3 class="font-bold text-lg text-rose-600">紹介・直接営業</h3>
                            <p class="text-sm text-gray-600 mt-2">知人紹介、企業への直接営業。単価が高く、継続につながりやすい。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">高単価</span>
                                <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs">人脈必要</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">クラウドソーシングで受注するコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">1. プロフィールを充実させる</h4>
                    <p class="text-sm text-gray-600">写真、自己紹介、スキル、実績を丁寧に記載。信頼感がアップ。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">2. 提案文を丁寧に書く</h4>
                    <p class="text-sm text-gray-600">テンプレ感を出さず、案件ごとにカスタマイズ。クライアントの課題に寄り添う。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">3. 最初は低単価でも受ける</h4>
                    <p class="text-sm text-gray-600">実績0では選ばれにくい。まずは評価を貯めることを優先。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-rose-600 mb-2">4. 迅速・丁寧なコミュニケーション</h4>
                    <p class="text-sm text-gray-600">返信は24時間以内。報連相をしっかり。これだけで差がつく。</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">AIで提案文を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の案件に応募する提案文を作成してください。

【案件内容】
{案件の説明をコピペ}

【私のプロフィール】
・スキル：{スキル}
・経験：{経験}
・強み：{強み}

【提案文に含めたいこと】
・案件への理解を示す
・自分が適任である理由
・具体的な進め方の提案
・納期への言及

400文字程度で、採用されやすい提案文をお願いします。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">まとめ</h2>
            <div class="bg-rose-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>クラウドソーシング、SNS、紹介の3ルート</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>初心者はクラウドソーシングから始める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>プロフィールと提案文の質が重要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>AIで効果的な提案文を作成できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-portfolio.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでポートフォリオ作成
            </a>
            <a href="pricing.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：価格設定・見積もり
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
