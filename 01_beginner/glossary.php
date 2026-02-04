<?php
$page_title = '用語集 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：サポート';
$step_number = 19;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- 検索ボックス -->
        <div class="mb-8">
            <input type="text" id="searchInput" placeholder="用語を検索..." class="w-full p-4 border rounded-lg shadow-sm" onkeyup="filterTerms()">
        </div>

        <!-- 用語リスト -->
        <div id="termsList" class="space-y-4">

            <!-- A -->
            <div class="term-item" data-term="api">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">API（Application Programming Interface）</h3>
                    <p class="text-sm text-gray-600 mt-2">アプリケーション間でデータをやり取りするための仕組み。フロントエンドとバックエンドの通信に使われる。「/todos」のようなエンドポイントに対してリクエストを送り、JSONでデータを受け取る。</p>
                </div>
            </div>

            <div class="term-item" data-term="async await">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">async / await</h3>
                    <p class="text-sm text-gray-600 mt-2">JavaScriptで非同期処理を扱うための構文。async関数の中でawaitを使うと、処理の完了を待ってから次の行に進む。API通信など時間がかかる処理で使う。</p>
                </div>
            </div>

            <!-- C -->
            <div class="term-item" data-term="component コンポーネント">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">コンポーネント（Component）</h3>
                    <p class="text-sm text-gray-600 mt-2">ReactやNext.jsで使うUIの部品。ボタン、フォーム、カードなどを独立した部品として作り、組み合わせてページを構築する。再利用可能で管理しやすい。</p>
                </div>
            </div>

            <div class="term-item" data-term="cors">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">CORS（Cross-Origin Resource Sharing）</h3>
                    <p class="text-sm text-gray-600 mt-2">異なるオリジン（ドメイン）間でリソースを共有するための仕組み。localhost:3000からlocalhost:8000へのアクセスもCORSの設定が必要。バックエンドで許可設定を行う。</p>
                </div>
            </div>

            <div class="term-item" data-term="crud">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">CRUD</h3>
                    <p class="text-sm text-gray-600 mt-2">Create（作成）、Read（読み取り）、Update（更新）、Delete（削除）の頭文字。データベースやAPIの基本的な4つの操作を指す。</p>
                </div>
            </div>

            <!-- E -->
            <div class="term-item" data-term="endpoint エンドポイント">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">エンドポイント（Endpoint）</h3>
                    <p class="text-sm text-gray-600 mt-2">APIにアクセスするためのURL。「/todos」「/users/123」などのパスのこと。HTTPメソッド（GET/POST等）と組み合わせて機能を定義する。</p>
                </div>
            </div>

            <!-- F -->
            <div class="term-item" data-term="fetch フェッチ">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">fetch</h3>
                    <p class="text-sm text-gray-600 mt-2">JavaScriptでHTTPリクエストを送るための関数。APIからデータを取得したり、データを送信したりするときに使う。</p>
                </div>
            </div>

            <div class="term-item" data-term="framework フレームワーク">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">フレームワーク（Framework）</h3>
                    <p class="text-sm text-gray-600 mt-2">アプリ開発の土台となる枠組みを提供するもの。Next.jsやFastAPIがこれにあたる。ルーティングやセキュリティなど、よく使う機能があらかじめ用意されている。</p>
                </div>
            </div>

            <!-- H -->
            <div class="term-item" data-term="hooks フック">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Hooks（フック）</h3>
                    <p class="text-sm text-gray-600 mt-2">Reactの機能で、関数コンポーネントで状態管理や副作用を扱うための仕組み。useState、useEffectなど「use」で始まる関数のこと。</p>
                </div>
            </div>

            <div class="term-item" data-term="http">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">HTTP / HTTPS</h3>
                    <p class="text-sm text-gray-600 mt-2">Webでデータをやり取りするためのプロトコル（通信規約）。HTTPSは暗号化されたセキュアな通信。GET/POST/PUT/DELETEなどのメソッドがある。</p>
                </div>
            </div>

            <!-- J -->
            <div class="term-item" data-term="json">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">JSON（JavaScript Object Notation）</h3>
                    <p class="text-sm text-gray-600 mt-2">データを表現するための形式。<code class="bg-gray-100 px-1 rounded">{"name": "太郎", "age": 25}</code>のように書く。APIでのデータ交換によく使われる。人間にも読みやすい。</p>
                </div>
            </div>

            <div class="term-item" data-term="jsx">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">JSX</h3>
                    <p class="text-sm text-gray-600 mt-2">JavaScriptの中にHTMLのような記法を書ける構文。Reactで使われる。<code class="bg-gray-100 px-1 rounded">&lt;div&gt;Hello&lt;/div&gt;</code>のようにJavaScript内に直接UIを記述できる。</p>
                </div>
            </div>

            <!-- N -->
            <div class="term-item" data-term="npm">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">npm（Node Package Manager）</h3>
                    <p class="text-sm text-gray-600 mt-2">JavaScriptのパッケージ管理ツール。外部ライブラリのインストールやプロジェクトの管理に使う。<code class="bg-gray-100 px-1 rounded">npm install</code>でパッケージをインストール。</p>
                </div>
            </div>

            <!-- P -->
            <div class="term-item" data-term="pip">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">pip</h3>
                    <p class="text-sm text-gray-600 mt-2">Pythonのパッケージ管理ツール。<code class="bg-gray-100 px-1 rounded">pip install fastapi</code>のように外部ライブラリをインストールする。</p>
                </div>
            </div>

            <div class="term-item" data-term="props プロップス">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">props（プロップス）</h3>
                    <p class="text-sm text-gray-600 mt-2">Reactコンポーネントに渡すデータ。親コンポーネントから子コンポーネントへデータを渡すときに使う。<code class="bg-gray-100 px-1 rounded">&lt;Button text="送信" /&gt;</code>のように渡す。</p>
                </div>
            </div>

            <div class="term-item" data-term="pydantic">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Pydantic</h3>
                    <p class="text-sm text-gray-600 mt-2">Pythonのデータバリデーションライブラリ。FastAPIでリクエスト/レスポンスのデータ構造を定義するのに使う。型ヒントを活用して自動でバリデーションを行う。</p>
                </div>
            </div>

            <!-- R -->
            <div class="term-item" data-term="routing ルーティング">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">ルーティング（Routing）</h3>
                    <p class="text-sm text-gray-600 mt-2">URLと表示するページや処理を対応づける仕組み。Next.jsではファイル名がそのままURLになる。/about → app/about/page.tsx</p>
                </div>
            </div>

            <!-- S -->
            <div class="term-item" data-term="state 状態">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">State（状態）</h3>
                    <p class="text-sm text-gray-600 mt-2">コンポーネントが保持するデータ。useStateで管理する。状態が変わると画面が自動的に再描画される。カウンターの数値やフォームの入力値など。</p>
                </div>
            </div>

            <!-- T -->
            <div class="term-item" data-term="typescript タイプスクリプト">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">TypeScript</h3>
                    <p class="text-sm text-gray-600 mt-2">JavaScriptに型システムを追加した言語。変数や関数に型を指定することで、エラーを事前に発見しやすくなる。.tsまたは.tsx拡張子を使う。</p>
                </div>
            </div>

            <!-- U -->
            <div class="term-item" data-term="usestate">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">useState</h3>
                    <p class="text-sm text-gray-600 mt-2">Reactのフック。コンポーネント内で状態を管理する。<code class="bg-gray-100 px-1 rounded">const [count, setCount] = useState(0)</code>のように使い、setCountで値を更新する。</p>
                </div>
            </div>

            <div class="term-item" data-term="useeffect">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">useEffect</h3>
                    <p class="text-sm text-gray-600 mt-2">Reactのフック。コンポーネントの表示後や、特定の値が変わったときに処理を実行する。APIからのデータ取得などに使う。</p>
                </div>
            </div>

            <!-- フロントエンド/バックエンド -->
            <div class="term-item" data-term="frontend フロントエンド">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">フロントエンド（Frontend）</h3>
                    <p class="text-sm text-gray-600 mt-2">ユーザーが直接見て操作する部分。ブラウザで動作するUI。HTML/CSS/JavaScript、React、Next.jsなどで作る。</p>
                </div>
            </div>

            <div class="term-item" data-term="backend バックエンド">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">バックエンド（Backend）</h3>
                    <p class="text-sm text-gray-600 mt-2">ユーザーからは見えない裏側の部分。サーバーで動作し、データの保存や処理を行う。Python、FastAPI、データベースなどで作る。</p>
                </div>
            </div>

        </div>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t mt-12">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                トップページへ戻る
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

    
    <script>
        function filterTerms() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const items = document.querySelectorAll('.term-item');

            items.forEach(item => {
                const term = item.getAttribute('data-term').toLowerCase();
                const content = item.textContent.toLowerCase();
                if (term.includes(input) || content.includes(input)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

<?php include 'includes/footer.php'; ?>
