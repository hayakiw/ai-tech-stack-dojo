<?php
$page_title = '研修手法・形式 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：人材育成の基礎知識';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">研修手法・形式</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">研修にはさまざまな手法があります。目的・対象・内容に応じて最適な形式を選び、組み合わせましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">主な研修形式</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">集合研修（対面）</h3>
                    <p class="text-gray-600 mb-3">参加者が一堂に会して行う研修。ワークショップ、ロールプレイに適する。</p>
                    <div class="grid md:grid-cols-2 gap-4 text-sm">
                        <div class="bg-green-50 p-3 rounded">
                            <strong class="text-green-600">メリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・参加者同士の交流</li>
                                <li>・グループワークが活発に</li>
                                <li>・集中しやすい環境</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-3 rounded">
                            <strong class="text-red-600">デメリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・コスト（会場費、移動費）</li>
                                <li>・日程調整が大変</li>
                                <li>・遠方からの参加が困難</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">オンライン研修（同期）</h3>
                    <p class="text-gray-600 mb-3">Zoom等を使い、リアルタイムで行う研修。場所を問わず参加可能。</p>
                    <div class="grid md:grid-cols-2 gap-4 text-sm">
                        <div class="bg-green-50 p-3 rounded">
                            <strong class="text-green-600">メリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・移動時間・コスト削減</li>
                                <li>・全国から参加可能</li>
                                <li>・録画で復習できる</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-3 rounded">
                            <strong class="text-red-600">デメリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・集中力の維持が難しい</li>
                                <li>・通信環境に依存</li>
                                <li>・非言語コミュニケーション減</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">eラーニング（非同期）</h3>
                    <p class="text-gray-600 mb-3">動画や教材を各自のペースで学習。いつでもどこでも学べる。</p>
                    <div class="grid md:grid-cols-2 gap-4 text-sm">
                        <div class="bg-green-50 p-3 rounded">
                            <strong class="text-green-600">メリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・自分のペースで学べる</li>
                                <li>・繰り返し視聴可能</li>
                                <li>・大人数に一斉展開</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-3 rounded">
                            <strong class="text-red-600">デメリット</strong>
                            <ul class="mt-2 space-y-1 text-gray-600">
                                <li>・モチベーション維持が課題</li>
                                <li>・双方向性が低い</li>
                                <li>・制作コストがかかる</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">ブレンディッドラーニング</h3>
                    <p class="text-gray-600 mb-3">複数の形式を組み合わせる。eラーニングで知識習得→集合研修で実践。</p>
                    <div class="bg-sky-50 p-3 rounded text-sm">
                        <strong>例：</strong>事前にeラーニング → 集合研修でグループワーク → フォローアップのオンライン面談
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">研修手法</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">講義形式</h3>
                    <p class="text-sm text-gray-600">講師が知識を伝達。大人数への情報共有に効率的。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">ケーススタディ</h3>
                    <p class="text-sm text-gray-600">実際の事例を分析・議論。思考力を養う。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">ロールプレイ</h3>
                    <p class="text-sm text-gray-600">役割を演じて実践。営業・接客研修に有効。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">グループワーク</h3>
                    <p class="text-sm text-gray-600">チームで課題に取り組む。協働力を養う。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">OJT</h3>
                    <p class="text-sm text-gray-600">実務を通じて学ぶ。上司・先輩が指導。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">メンタリング</h3>
                    <p class="text-sm text-gray-600">経験者が相談相手に。キャリア支援に有効。</p>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIで研修手法を選定</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件で最適な研修手法を提案してください。

【研修テーマ】クレーム対応スキル
【対象者】カスタマーサポート担当20名（全国に分散）
【予算】限定的
【時間】合計8時間程度

複数の手法を組み合わせたブレンディッドラーニングで設計し、
各手法の役割と実施順序を説明してください。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">まとめ</h2>
            <div class="bg-sky-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>研修形式：集合、オンライン、eラーニング等</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>目的と対象者に応じて最適な形式を選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>ブレンディッドラーニングで効果を最大化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>AIで最適な手法の組み合わせを相談</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="adult-learning.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：成人学習理論
            </a>
            <a href="ai-training-tools.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：AI研修ツール
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
