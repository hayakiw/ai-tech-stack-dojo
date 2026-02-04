<?php
$page_title = '公開と運用 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：公開とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">公開と運用</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">作ったサイトをインターネットに公開しましょう。無料〜低コストで公開できるサービスを紹介します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">公開に必要なもの</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-bold text-lg mb-3 text-orange-600">🌐 ドメイン</h3>
                        <p class="text-sm text-gray-600 mb-2">サイトの住所（URL）</p>
                        <p class="text-sm">例：example.com</p>
                        <p class="text-xs text-gray-500 mt-2">年間1,000〜3,000円程度</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-3 text-orange-600">🖥️ サーバー</h3>
                        <p class="text-sm text-gray-600 mb-2">サイトのデータを置く場所</p>
                        <p class="text-sm">静的サイトなら無料も可能</p>
                        <p class="text-xs text-gray-500 mt-2">無料〜月額1,000円程度</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">無料で公開できるサービス</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">▲</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Vercel</h3>
                            <p class="text-gray-600 mb-2">静的サイト、Next.jsに最適。GitHubと連携で自動デプロイ。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料枠あり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">SSL自動</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">高速</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🔥</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Netlify</h3>
                            <p class="text-gray-600 mb-2">静的サイトに特化。フォーム機能も無料で使える。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料枠あり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">フォーム機能</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">ドラッグ&ドロップ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📄</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">GitHub Pages</h3>
                            <p class="text-gray-600 mb-2">GitHubリポジトリから直接公開。完全無料。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">完全無料</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">GitHub連携</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">公開の手順（Vercelの場合）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h4 class="font-bold">GitHubにコードをアップロード</h4>
                            <p class="text-sm text-gray-600">リポジトリを作成し、HTMLファイルをプッシュ</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h4 class="font-bold">Vercelに登録</h4>
                            <p class="text-sm text-gray-600">GitHubアカウントでログイン</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h4 class="font-bold">リポジトリをインポート</h4>
                            <p class="text-sm text-gray-600">公開するリポジトリを選択</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h4 class="font-bold">デプロイ完了！</h4>
                            <p class="text-sm text-gray-600">自動でURLが発行される（○○.vercel.app）</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">公開後にやること</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">📊 アクセス解析</h4>
                    <p class="text-sm text-gray-600">Google Analyticsを設置して訪問者を分析</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">🔍 Search Console</h4>
                    <p class="text-sm text-gray-600">Google検索でのパフォーマンスを確認</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">📱 各デバイスで確認</h4>
                    <p class="text-sm text-gray-600">PC、スマホ、タブレットで表示チェック</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">🔄 定期的な更新</h4>
                    <p class="text-sm text-gray-600">コンテンツを更新して鮮度を保つ</p>
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
                        <span>静的サイトはVercel、Netlify、GitHub Pagesで無料公開</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>GitHubと連携すれば自動デプロイが可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>公開後はアクセス解析を設置</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>定期的な更新でサイトの価値を維持</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-blog.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ブログサイト制作
            </a>
            <a href="next-steps.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
