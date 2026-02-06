<?php
$page_title = 'ブログアプリ仕上げ編 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block {
            background: #1e293b;
            color: #e2e8f0;
        }';
$section_name = '第8部：実践プロジェクト';
$step_number = 24;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログアプリ仕上げ編</h1>

        <!-- イントロ -->
        <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
            <p class="text-lg">基本機能が完成したら、品質向上とデプロイで仕上げましょう！</p>
        </div>

        <!-- 仕上げチェックリスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">仕上げチェックリスト</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div>
                        <h3 class="font-bold mb-3 text-green-600">機能テスト</h3>
                        <ul class="text-sm space-y-2">
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>ユーザー登録ができる</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>ログイン・ログアウトができる</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>記事の作成ができる</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>自分の記事の編集・削除ができる</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>他人の記事は編集・削除できない</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>未ログイン時は記事作成できない</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-blue-600">UI/UX</h3>
                        <ul class="text-sm space-y-2">
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>ローディング表示がある</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>エラー時にメッセージが表示される</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>レスポンシブ対応している</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-red-600">セキュリティ</h3>
                        <ul class="text-sm space-y-2">
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>パスワードはハッシュ化されている</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>SECRET_KEYは環境変数化されている</li>
                            <li class="flex items-center"><span class="w-5 h-5 border-2 rounded mr-3"></span>.envはGit除外されている</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- コードレビュー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Claude Codeでコードレビュー</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4 text-gray-700">Claude Codeはプロジェクト全体のファイルを読み取れるため、コードを手動で貼り付ける必要はありません。プロジェクトのルートディレクトリで以下の指示を出しましょう。</p>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                    <p class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>プロジェクト全体のコードレビューをしてください。
セキュリティ、パフォーマンス、エラーハンドリング、
コードの可読性を確認して、改善点を教えてください。</pre>
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="font-bold mb-3 text-indigo-600">Claude Codeが行うこと</h3>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-indigo-500 mr-2 mt-0.5">&#9679;</span>
                            <span>プロジェクト内のすべてのファイル（バックエンド・フロントエンド）を自動で読み取り</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-500 mr-2 mt-0.5">&#9679;</span>
                            <span>セキュリティ上の問題（SQLインジェクション、XSSなど）を特定</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-500 mr-2 mt-0.5">&#9679;</span>
                            <span>パフォーマンスのボトルネックや非効率なコードを指摘</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-500 mr-2 mt-0.5">&#9679;</span>
                            <span>エラーハンドリングの不足箇所を発見</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-500 mr-2 mt-0.5">&#9679;</span>
                            <span>具体的な修正案をコード付きで提示</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 機能テスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Claude Codeで機能テストを実行</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4 text-gray-700">Claude Codeにテストシナリオを渡して、アプリケーション全体の動作確認を行いましょう。</p>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                    <p class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のテストシナリオを実行して、
すべてパスすることを確認してください。

1. ユーザー登録（テスト用ユーザー作成）
2. ログイン（作成したユーザーでログイン）
3. 記事作成（タイトルと本文を入力して投稿）
4. 記事表示（作成した記事が一覧・詳細で表示される）
5. 記事編集（タイトルと本文を変更して更新）
6. 記事削除（作成した記事を削除）
7. ログアウト（セッションが破棄される）
8. 未ログイン確認（ログアウト後、記事作成ができない）</pre>
                    </div>
                </div>

                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                    <p class="font-bold text-green-700 mb-2">期待される結果</p>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">&#10003;</span>
                            すべてのAPIエンドポイントが正常にレスポンスを返す
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">&#10003;</span>
                            認証が必要なエンドポイントは未認証時に401を返す
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">&#10003;</span>
                            CRUD操作がデータベースに正しく反映される
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">&#10003;</span>
                            他ユーザーの記事は編集・削除できない（403エラー）
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">&#10003;</span>
                            フロントエンドの画面遷移が正しく動作する
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- デプロイ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Claude Codeでデプロイ準備</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">推奨構成</h3>
                <div class="grid md:grid-cols-3 gap-4 mb-6">
                    <div class="p-4 bg-blue-50 rounded text-center">
                        <p class="font-bold text-blue-700">Frontend</p>
                        <p class="text-sm">Vercel</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded text-center">
                        <p class="font-bold text-green-700">Backend</p>
                        <p class="text-sm">Railway</p>
                    </div>
                    <div class="p-4 bg-orange-50 rounded text-center">
                        <p class="font-bold text-orange-700">Database</p>
                        <p class="text-sm">Railway MySQL</p>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                    <p class="font-bold text-indigo-700 mb-2">Claude Codeへの指示</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>本番デプロイ用の設定ファイルを作成してください。
Vercel（フロントエンド）、Railway（バックエンド + MySQL）
を使用します。</pre>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                    <p class="font-bold text-indigo-700 mb-2">Claude Codeへの指示（デプロイ実行）</p>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>デプロイの手順を実行してください。
GitHubリポジトリの作成からVercel・Railwayへの
デプロイまで、ステップごとに進めてください。</pre>
                    </div>
                </div>

                <div class="mt-6">
                    <h4 class="font-bold mb-3">デプロイ手順</h4>
                    <ol class="text-sm space-y-3">
                        <li class="flex items-start">
                            <span class="font-bold text-indigo-600 mr-2">1.</span>
                            <div>
                                <span class="font-bold">GitHubにリポジトリを作成してプッシュ</span>
                                <p class="text-gray-500 mt-1">フロントエンドとバックエンドを同一リポジトリまたは別リポジトリで管理</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold text-indigo-600 mr-2">2.</span>
                            <div>
                                <span class="font-bold">RailwayでMySQLデータベースを作成</span>
                                <p class="text-gray-500 mt-1">接続情報（ホスト、ポート、ユーザー名、パスワード）を控える</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold text-indigo-600 mr-2">3.</span>
                            <div>
                                <span class="font-bold">RailwayでバックエンドAPIをデプロイ</span>
                                <p class="text-gray-500 mt-1">環境変数にDB接続情報とSECRET_KEYを設定</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold text-indigo-600 mr-2">4.</span>
                            <div>
                                <span class="font-bold">VercelでフロントエンドをNext.jsとしてデプロイ</span>
                                <p class="text-gray-500 mt-1">環境変数にバックエンドAPIのURLを設定</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="font-bold text-indigo-600 mr-2">5.</span>
                            <div>
                                <span class="font-bold">本番環境での動作確認</span>
                                <p class="text-gray-500 mt-1">ユーザー登録、ログイン、記事CRUD操作を一通りテスト</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- 発展課題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">発展課題（チャレンジ）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">基本機能が完成したら、以下の機能追加にチャレンジしてみましょう！</p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">画像アップロード</h4>
                        <p class="text-sm text-gray-600">記事にサムネイル画像を追加</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">コメント機能</h4>
                        <p class="text-sm text-gray-600">記事にコメントを投稿できるように</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">いいね機能</h4>
                        <p class="text-sm text-gray-600">記事にいいねできるように</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">タグ機能</h4>
                        <p class="text-sm text-gray-600">記事にタグを付けて分類</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">検索機能</h4>
                        <p class="text-sm text-gray-600">タイトル・本文で記事を検索</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">プロフィール編集</h4>
                        <p class="text-sm text-gray-600">ユーザー情報を編集できるように</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white p-8 rounded-lg text-center">
                <h2 class="text-3xl font-bold mb-4">おめでとうございます！</h2>
                <p class="text-lg mb-6">中級編を完了しました！</p>
                <div class="text-left max-w-md mx-auto">
                    <p class="mb-4">習得したスキル：</p>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>&#10003; アプリケーション設計</li>
                        <li>&#10003; Docker環境構築</li>
                        <li>&#10003; MySQL + FastAPI連携</li>
                        <li>&#10003; JWT認証の実装</li>
                        <li>&#10003; Next.jsでの認証管理</li>
                        <li>&#10003; テストとコードレビュー</li>
                        <li>&#10003; デプロイ</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 次のステップ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">次のステップ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="text-indigo-600 mr-3">&rarr;</span>
                        <div>
                            <p class="font-bold">オリジナルアプリを作る</p>
                            <p class="text-sm text-gray-600">学んだことを活かして、自分のアイデアを形に</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-600 mr-3">&rarr;</span>
                        <div>
                            <p class="font-bold">発展課題にチャレンジ</p>
                            <p class="text-sm text-gray-600">画像アップロード、コメント機能などを追加</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-600 mr-3">&rarr;</span>
                        <div>
                            <p class="font-bold">ポートフォリオとして公開</p>
                            <p class="text-sm text-gray-600">GitHubにコードを公開、本番環境で運用</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="blog-implementation.php" class="flex items-center text-gray-600 hover:text-indigo-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                実装編
            </a>
            <a href="index.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                トップに戻る
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
