<?php
$page_title = 'マーケティングファネル - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：マーケティングの基礎知識';
$step_number = 4;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">マーケティングファネル</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">お客さんが商品を知ってから購入するまでの流れを「ファネル（漏斗）」で理解しましょう。各段階に合った施策が成果につながります。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">ファネルとは</h2>

            <p class="mb-4">マーケティングファネルは、見込み客が顧客になるまでの過程を「漏斗（じょうご）」の形で表したものです。上から下に進むにつれて人数が減っていきます。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="text-center">
                    <div class="inline-block text-left">
                        <div class="bg-teal-100 px-16 py-3 text-center rounded-t-lg mb-1">
                            <span class="font-bold">認知</span>
                            <span class="text-sm text-gray-600 block">商品・サービスを知る</span>
                        </div>
                        <div class="bg-teal-200 px-12 py-3 text-center mx-auto mb-1" style="width: 85%;">
                            <span class="font-bold">興味・関心</span>
                            <span class="text-sm text-gray-600 block">もっと知りたいと思う</span>
                        </div>
                        <div class="bg-teal-300 px-8 py-3 text-center mx-auto mb-1" style="width: 70%;">
                            <span class="font-bold">検討</span>
                            <span class="text-sm text-gray-600 block">比較・検討する</span>
                        </div>
                        <div class="bg-teal-400 px-4 py-3 text-center mx-auto mb-1 text-white" style="width: 55%;">
                            <span class="font-bold">購入</span>
                            <span class="text-sm block">実際に購入する</span>
                        </div>
                        <div class="bg-teal-600 px-2 py-3 text-center mx-auto rounded-b-lg text-white" style="width: 40%;">
                            <span class="font-bold">リピート</span>
                            <span class="text-sm block">再購入・紹介</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>ポイント：</strong>各段階で離脱する人がいるため、上に行くほど人数が多く、下に行くほど少なくなります。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">各段階の施策</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded font-bold mr-3">認知</span>
                        <span class="font-bold">まず知ってもらう</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">主な施策：</p>
                            <ul class="text-sm space-y-1">
                                <li>・SNS発信</li>
                                <li>・Web広告</li>
                                <li>・SEO対策</li>
                                <li>・インフルエンサーPR</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">指標：</p>
                            <ul class="text-sm space-y-1">
                                <li>・インプレッション数</li>
                                <li>・リーチ数</li>
                                <li>・フォロワー数</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-200 text-teal-700 px-3 py-1 rounded font-bold mr-3">興味・関心</span>
                        <span class="font-bold">詳しく知りたいと思わせる</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">主な施策：</p>
                            <ul class="text-sm space-y-1">
                                <li>・ブログ記事</li>
                                <li>・動画コンテンツ</li>
                                <li>・無料資料</li>
                                <li>・メルマガ登録</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">指標：</p>
                            <ul class="text-sm space-y-1">
                                <li>・クリック率</li>
                                <li>・滞在時間</li>
                                <li>・登録数</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-300 text-teal-700 px-3 py-1 rounded font-bold mr-3">検討</span>
                        <span class="font-bold">選ばれる理由を伝える</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">主な施策：</p>
                            <ul class="text-sm space-y-1">
                                <li>・事例紹介</li>
                                <li>・お客様の声</li>
                                <li>・比較コンテンツ</li>
                                <li>・無料トライアル</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">指標：</p>
                            <ul class="text-sm space-y-1">
                                <li>・資料請求数</li>
                                <li>・問い合わせ数</li>
                                <li>・トライアル申込数</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-400 text-white px-3 py-1 rounded font-bold mr-3">購入</span>
                        <span class="font-bold">購入を後押しする</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">主な施策：</p>
                            <ul class="text-sm space-y-1">
                                <li>・期間限定オファー</li>
                                <li>・購入サポート</li>
                                <li>・FAQ充実</li>
                                <li>・決済の簡素化</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">指標：</p>
                            <ul class="text-sm space-y-1">
                                <li>・購入数</li>
                                <li>・コンバージョン率</li>
                                <li>・カート放棄率</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-600 text-white px-3 py-1 rounded font-bold mr-3">リピート</span>
                        <span class="font-bold">継続利用・紹介を促す</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2">主な施策：</p>
                            <ul class="text-sm space-y-1">
                                <li>・フォローメール</li>
                                <li>・ロイヤリティプログラム</li>
                                <li>・紹介キャンペーン</li>
                                <li>・コミュニティ運営</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-2">指標：</p>
                            <ul class="text-sm space-y-1">
                                <li>・リピート率</li>
                                <li>・LTV（顧客生涯価値）</li>
                                <li>・紹介数</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでファネル設計</h2>

            <p class="mb-4">AIにファネル全体の施策を考えてもらうことができます。</p>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-teal-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下のサービスのマーケティングファネルを設計してください。

【サービス】オンラインヨガレッスン（月額5,000円）
【ターゲット】30代〜40代の働く女性

各段階（認知→興味→検討→購入→リピート）で
- 具体的な施策
- KPI（目標数値）
- AIを活用できるポイント
を提案してください。</pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>AIの活用ポイント：</strong>ファネルの各段階で使うコンテンツ（SNS投稿、メール文面、LP文章など）もAIに生成してもらえます。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ファネルは認知→興味→検討→購入→リピートの流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>各段階に適した施策と指標がある</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>どの段階で離脱が多いかを分析して改善する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIでファネル設計やコンテンツ作成を効率化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="target-persona.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ターゲットとペルソナ
            </a>
            <a href="ai-tools.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：AI時代のマーケティング
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
