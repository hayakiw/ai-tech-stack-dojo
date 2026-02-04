<?php
$page_title = '次のステップ - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：サポート';
$step_number = 18;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">次のステップ</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">おめでとうございます！基礎を学び、Todoアプリを完成させました。ここからさらにスキルアップするためのリソースと課題を紹介します。</p>
        </div>

        <!-- デプロイ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">アプリを公開しよう（デプロイ）</h2>

            <p class="mb-6">作ったアプリを世界に公開してみましょう。無料で使えるサービスを紹介します。</p>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-blue-600">フロントエンド：Vercel</h3>
                    <p class="text-sm text-gray-600 mb-3">Next.jsの開発元が提供するホスティングサービス。無料プランあり。</p>
                    <ul class="list-disc list-inside text-sm space-y-1 mb-4">
                        <li>GitHubと連携して自動デプロイ</li>
                        <li>Next.jsに最適化</li>
                        <li>無料でHTTPS対応</li>
                    </ul>
                    <a href="https://vercel.com/" class="text-blue-600 hover:underline text-sm" target="_blank">vercel.com →</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-3 text-green-600">バックエンド：Render / Railway</h3>
                    <p class="text-sm text-gray-600 mb-3">PythonのAPIをホスティングできるサービス。無料プランあり。</p>
                    <ul class="list-disc list-inside text-sm space-y-1 mb-4">
                        <li>Dockerなしでも簡単デプロイ</li>
                        <li>無料枠でも動作確認可能</li>
                    </ul>
                    <div class="space-x-4">
                        <a href="https://render.com/" class="text-blue-600 hover:underline text-sm" target="_blank">render.com →</a>
                        <a href="https://railway.app/" class="text-blue-600 hover:underline text-sm" target="_blank">railway.app →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 練習課題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">挑戦してみよう（練習課題）</h2>

            <p class="mb-6">Todoアプリで学んだ知識を応用して、新しいアプリを作ってみましょう。</p>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-yellow-500">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-lg">メモアプリ</h3>
                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-sm">初級</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">タイトルと本文を持つメモを作成・編集・削除できるアプリ</p>
                    <ul class="list-disc list-inside text-sm text-gray-500">
                        <li>Todoアプリの応用で作れる</li>
                        <li>テキストエリアの使い方を学ぶ</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-orange-500">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-lg">家計簿アプリ</h3>
                        <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-sm">中級</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">収入と支出を記録し、合計を計算するアプリ</p>
                    <ul class="list-disc list-inside text-sm text-gray-500">
                        <li>数値の計算処理</li>
                        <li>日付の扱い</li>
                        <li>カテゴリ分け</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-red-500">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-bold text-lg">ブログアプリ</h3>
                        <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-sm">上級</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">記事の投稿・一覧・詳細ページがあるブログ</p>
                    <ul class="list-disc list-inside text-sm text-gray-500">
                        <li>複数ページの構成</li>
                        <li>動的ルーティング（/posts/[id]）</li>
                        <li>Markdownの表示</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 学習リソース -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">さらに学ぶためのリソース</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-purple-600">公式ドキュメント</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://nextjs.org/docs" class="text-blue-600 hover:underline" target="_blank">Next.js Documentation</a>
                            <span class="text-sm text-gray-500 ml-2">- 公式チュートリアルもおすすめ</span>
                        </li>
                        <li>
                            <a href="https://fastapi.tiangolo.com/" class="text-blue-600 hover:underline" target="_blank">FastAPI Documentation</a>
                            <span class="text-sm text-gray-500 ml-2">- 日本語訳もあり</span>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/docs" class="text-blue-600 hover:underline" target="_blank">Tailwind CSS Documentation</a>
                            <span class="text-sm text-gray-500 ml-2">- クラス名の検索に便利</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">学習プラットフォーム</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://www.udemy.com/" class="text-blue-600 hover:underline" target="_blank">Udemy</a>
                            <span class="text-sm text-gray-500 ml-2">- 日本語の動画講座が豊富</span>
                        </li>
                        <li>
                            <a href="https://zenn.dev/" class="text-blue-600 hover:underline" target="_blank">Zenn</a>
                            <span class="text-sm text-gray-500 ml-2">- 日本語の技術記事プラットフォーム</span>
                        </li>
                        <li>
                            <a href="https://qiita.com/" class="text-blue-600 hover:underline" target="_blank">Qiita</a>
                            <span class="text-sm text-gray-500 ml-2">- 日本語の技術記事・Tips</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-600">次に学ぶとよい技術</h3>
                    <ul class="space-y-2 text-sm">
                        <li><strong>データベース</strong>：PostgreSQL, SQLite（データの永続化）</li>
                        <li><strong>認証</strong>：NextAuth.js, Firebase Auth（ログイン機能）</li>
                        <li><strong>状態管理</strong>：Zustand, Jotai（複雑な状態管理）</li>
                        <li><strong>テスト</strong>：Jest, Playwright（品質担保）</li>
                        <li><strong>Docker</strong>：コンテナ化（デプロイの安定化）</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくある質問（FAQ）</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">Q: データベースを使わなくていいの？</h3>
                    <p class="text-sm text-gray-600">このチュートリアルではメモリ上でデータを管理しました。実際のアプリでは、サーバーを再起動してもデータが残るようにデータベースを使います。SQLiteやPostgreSQLがおすすめです。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">Q: TypeScriptは必須？</h3>
                    <p class="text-sm text-gray-600">必須ではありませんが、AIがより正確なコードを生成しやすく、エラーも発見しやすくなるため強くおすすめします。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">Q: AIなしでも開発できるようになる？</h3>
                    <p class="text-sm text-gray-600">はい。AIを使いながら開発していると、パターンが身についてきます。最初はAIに頼りつつ、徐々に自分で書ける範囲を増やしていきましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">Q: エラーが解決できないときは？</h3>
                    <p class="text-sm text-gray-600">エラーメッセージをそのままAIに貼り付けて質問しましょう。また、StackOverflowやZennで検索すると、同じ問題に遭遇した人の解決策が見つかることがあります。</p>
                </div>
            </div>
        </section>

        <!-- 最後のメッセージ -->
        <div class="bg-gradient-to-r from-purple-500 to-blue-500 text-white p-8 rounded-lg mb-8">
            <h3 class="text-2xl font-bold mb-4">お疲れさまでした！</h3>
            <p class="mb-4">このサイトで学んだ知識があれば、AIの力を借りながら様々なWebアプリを作れるようになります。</p>
            <p class="mb-4">大切なのは「実際に作ってみること」です。完璧を目指さず、まずは動くものを作り、少しずつ改善していきましょう。</p>
            <p class="font-bold">Happy Coding!</p>
        </div>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="errors.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：よくあるエラー集
            </a>
            <a href="glossary.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：用語集
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
