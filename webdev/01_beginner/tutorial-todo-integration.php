<?php
$page_title = 'Todoアプリ - 連携編 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'tutorial';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：実践チュートリアル';
$step_number = 16;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Todoアプリ - 連携編</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">いよいよ最終ステップ！フロントエンドとバックエンドを連携させて、完全なTodoアプリを完成させます。</p>
        </div>

        <!-- 連携の流れ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">連携の流れ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                    <div class="bg-blue-100 p-4 rounded-lg text-center">
                        <div class="font-bold text-blue-700">Next.js</div>
                        <div class="text-sm">localhost:3000</div>
                    </div>
                    <div class="text-2xl">⇄ fetch API ⇄</div>
                    <div class="bg-green-100 p-4 rounded-lg text-center">
                        <div class="font-bold text-green-700">FastAPI</div>
                        <div class="text-sm">localhost:8000</div>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p class="text-sm"><strong>何が変わる？</strong> 前ページではモックデータ（仮のデータ）を使っていたため、ページをリロードすると元に戻っていました。API連携により、データがバックエンド側に保存され、リロードしても残るようになります。</p>
            </div>
        </section>

        <!-- Step 1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 1: API通信関数を作成</h2>

            <p class="mb-4 text-sm text-gray-600">まず、バックエンドと通信するための関数をまとめたファイルを作成します。API通信の処理を1つのファイルにまとめておくと、コンポーネントがすっきりします。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>frontend/src/lib/api.ts を作成して、
TodoのAPI通信関数を作成してください。

関数:
- fetchTodos(): 全Todo取得
- createTodo(title: string): Todo作成
- updateTodo(id: number, data: { completed?: boolean }): Todo更新
- deleteTodo(id: number): Todo削除

APIのベースURL: http://localhost:8000</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード: src/lib/api.ts</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-purple-400">import</span> { Todo } <span class="text-purple-400">from</span> <span class="text-green-400">"@/types/todo"</span>;

<span class="text-purple-400">const</span> API_URL = <span class="text-green-400">"http://localhost:8000"</span>;

<span class="text-purple-400">export async function</span> <span class="text-blue-400">fetchTodos</span>(): Promise&lt;Todo[]&gt; {
  <span class="text-purple-400">const</span> res = <span class="text-purple-400">await</span> fetch(<span class="text-green-400">`${API_URL}/todos`</span>);
  <span class="text-purple-400">return</span> res.json();
}

<span class="text-purple-400">export async function</span> <span class="text-blue-400">createTodo</span>(title: <span class="text-blue-400">string</span>): Promise&lt;Todo&gt; {
  <span class="text-purple-400">const</span> res = <span class="text-purple-400">await</span> fetch(<span class="text-green-400">`${API_URL}/todos`</span>, {
    method: <span class="text-green-400">"POST"</span>,
    headers: { <span class="text-green-400">"Content-Type"</span>: <span class="text-green-400">"application/json"</span> },
    body: JSON.stringify({ title }),
  });
  <span class="text-purple-400">return</span> res.json();
}

<span class="text-purple-400">export async function</span> <span class="text-blue-400">updateTodo</span>(
  id: <span class="text-blue-400">number</span>,
  data: { title?: <span class="text-blue-400">string</span>; completed?: <span class="text-blue-400">boolean</span> }
): Promise&lt;Todo&gt; {
  <span class="text-purple-400">const</span> res = <span class="text-purple-400">await</span> fetch(<span class="text-green-400">`${API_URL}/todos/${id}`</span>, {
    method: <span class="text-green-400">"PUT"</span>,
    headers: { <span class="text-green-400">"Content-Type"</span>: <span class="text-green-400">"application/json"</span> },
    body: JSON.stringify(data),
  });
  <span class="text-purple-400">return</span> res.json();
}

<span class="text-purple-400">export async function</span> <span class="text-blue-400">deleteTodo</span>(id: <span class="text-blue-400">number</span>): Promise&lt;<span class="text-blue-400">void</span>&gt; {
  <span class="text-purple-400">await</span> fetch(<span class="text-green-400">`${API_URL}/todos/${id}`</span>, {
    method: <span class="text-green-400">"DELETE"</span>,
  });
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3 text-blue-700">コード解説</h3>
                <div class="space-y-3 text-sm text-gray-600">
                    <div class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">async/await</span>
                        <p>API通信は時間がかかる処理なので、<code class="bg-gray-100 px-1 rounded">async</code>関数の中で<code class="bg-gray-100 px-1 rounded">await</code>を使って「完了を待ってから次に進む」ようにしています。</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">fetch</span>
                        <p>ブラウザ標準のHTTP通信関数。第1引数にURL、第2引数にオプション（HTTPメソッド、ヘッダー、ボディ）を渡します。</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">JSON.stringify</span>
                        <p>JavaScriptのオブジェクトをJSON文字列に変換。APIにデータを送るときはJSON形式にする必要があります。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 2: ページをAPI連携に変更</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>frontend/src/app/page.tsx を編集して、
モックデータの代わりにAPIを使うように変更してください。

変更内容:
1. useEffectで初回読み込み時にfetchTodosを呼ぶ
2. addTodo関数をcreateToを使うように変更
3. toggleTodo関数をupdateTodoを使うように変更
4. deleteTodo関数をdeleteTodoAPIを使うように変更
5. ローディング状態を追加（読み込み中は「Loading...」を表示）</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">完成コード: src/app/page.tsx（API連携版）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">"use client"</span>;

<span class="text-purple-400">import</span> { useState, useEffect } <span class="text-purple-400">from</span> <span class="text-green-400">"react"</span>;
<span class="text-purple-400">import</span> { Todo } <span class="text-purple-400">from</span> <span class="text-green-400">"@/types/todo"</span>;
<span class="text-purple-400">import</span> * <span class="text-purple-400">as</span> api <span class="text-purple-400">from</span> <span class="text-green-400">"@/lib/api"</span>;

<span class="text-purple-400">export default function</span> <span class="text-blue-400">Home</span>() {
  <span class="text-purple-400">const</span> [todos, setTodos] = useState&lt;Todo[]&gt;([]);
  <span class="text-purple-400">const</span> [newTitle, setNewTitle] = useState(<span class="text-green-400">""</span>);
  <span class="text-purple-400">const</span> [loading, setLoading] = useState(<span class="text-purple-400">true</span>);

  <span class="text-gray-400">// 初回読み込み：ページ表示時にAPIからTodoを取得</span>
  useEffect(() => {
    api.fetchTodos().then((data) => {
      setTodos(data);
      setLoading(<span class="text-purple-400">false</span>);
    });
  }, []);

  <span class="text-gray-400">// Todo追加：APIに送信してから画面を更新</span>
  <span class="text-purple-400">const</span> addTodo = <span class="text-purple-400">async</span> () => {
    <span class="text-purple-400">if</span> (!newTitle.trim()) <span class="text-purple-400">return</span>;
    <span class="text-purple-400">const</span> newTodo = <span class="text-purple-400">await</span> api.createTodo(newTitle);
    setTodos([...todos, newTodo]);
    setNewTitle(<span class="text-green-400">""</span>);
  };

  <span class="text-gray-400">// 完了切り替え：APIに更新を送信</span>
  <span class="text-purple-400">const</span> toggleTodo = <span class="text-purple-400">async</span> (id: <span class="text-blue-400">number</span>, completed: <span class="text-blue-400">boolean</span>) => {
    <span class="text-purple-400">const</span> updated = <span class="text-purple-400">await</span> api.updateTodo(id, {
      completed: !completed,
    });
    setTodos(todos.map(t => t.id === id ? updated : t));
  };

  <span class="text-gray-400">// 削除：APIから削除してから画面を更新</span>
  <span class="text-purple-400">const</span> handleDelete = <span class="text-purple-400">async</span> (id: <span class="text-blue-400">number</span>) => {
    <span class="text-purple-400">await</span> api.deleteTodo(id);
    setTodos(todos.filter(t => t.id !== id));
  };

  <span class="text-gray-400">// ローディング中の表示</span>
  <span class="text-purple-400">if</span> (loading) {
    <span class="text-purple-400">return</span> (
      <span class="text-cyan-400">&lt;main</span> className=<span class="text-green-400">"min-h-screen p-8 max-w-md mx-auto
        text-center text-gray-500"</span><span class="text-cyan-400">&gt;</span>
        Loading...
      <span class="text-cyan-400">&lt;/main&gt;</span>
    );
  }

  <span class="text-purple-400">return</span> (
    <span class="text-cyan-400">&lt;main</span> className=<span class="text-green-400">"min-h-screen p-8 max-w-md mx-auto"</span><span class="text-cyan-400">&gt;</span>
      <span class="text-cyan-400">&lt;h1</span> className=<span class="text-green-400">"text-2xl font-bold mb-6 text-center"</span><span class="text-cyan-400">&gt;</span>
        Todoリスト
      <span class="text-cyan-400">&lt;/h1&gt;</span>

      <span class="text-gray-400">{/* 追加フォーム */}</span>
      <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex mb-6"</span><span class="text-cyan-400">&gt;</span>
        <span class="text-cyan-400">&lt;input</span>
          type=<span class="text-green-400">"text"</span>
          value={newTitle}
          onChange={(e) => setNewTitle(e.target.value)}
          onKeyDown={(e) => e.key === <span class="text-green-400">"Enter"</span> && addTodo()}
          placeholder=<span class="text-green-400">"新しいTodoを入力..."</span>
          className=<span class="text-green-400">"flex-1 border rounded-l-lg px-4 py-2"</span>
        <span class="text-cyan-400">/&gt;</span>
        <span class="text-cyan-400">&lt;button</span>
          onClick={addTodo}
          className=<span class="text-green-400">"bg-blue-500 text-white px-4 py-2
            rounded-r-lg hover:bg-blue-600"</span>
        <span class="text-cyan-400">&gt;</span>
          追加
        <span class="text-cyan-400">&lt;/button&gt;</span>
      <span class="text-cyan-400">&lt;/div&gt;</span>

      <span class="text-gray-400">{/* Todoリスト */}</span>
      <span class="text-cyan-400">&lt;ul</span> className=<span class="text-green-400">"space-y-2"</span><span class="text-cyan-400">&gt;</span>
        {todos.map((todo) => (
          <span class="text-cyan-400">&lt;li</span>
            key={todo.id}
            className=<span class="text-green-400">"flex items-center justify-between
              p-3 bg-gray-50 rounded"</span>
          <span class="text-cyan-400">&gt;</span>
            <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex items-center"</span><span class="text-cyan-400">&gt;</span>
              <span class="text-cyan-400">&lt;input</span>
                type=<span class="text-green-400">"checkbox"</span>
                checked={todo.completed}
                onChange={() => toggleTodo(todo.id, todo.completed)}
                className=<span class="text-green-400">"mr-3"</span>
              <span class="text-cyan-400">/&gt;</span>
              <span class="text-cyan-400">&lt;span</span>
                className={todo.completed ?
                  <span class="text-green-400">"line-through text-gray-400"</span> : <span class="text-green-400">""</span>}
              <span class="text-cyan-400">&gt;</span>
                {todo.title}
              <span class="text-cyan-400">&lt;/span&gt;</span>
            <span class="text-cyan-400">&lt;/div&gt;</span>
            <span class="text-cyan-400">&lt;button</span>
              onClick={() => handleDelete(todo.id)}
              className=<span class="text-green-400">"text-red-500 hover:text-red-700"</span>
            <span class="text-cyan-400">&gt;</span>
              削除
            <span class="text-cyan-400">&lt;/button&gt;</span>
          <span class="text-cyan-400">&lt;/li&gt;</span>
        ))}
      <span class="text-cyan-400">&lt;/ul&gt;</span>
    <span class="text-cyan-400">&lt;/main&gt;</span>
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- 変更点の解説 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">モック版からの変更点</h2>

            <div class="space-y-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-blue-700">1. useEffect の追加</h3>
                    <p class="text-sm text-gray-600 mb-2"><code class="bg-gray-100 px-1 rounded">useEffect(() => { ... }, [])</code> はページが表示されたときに1回だけ実行される処理です。ここでAPIからTodoデータを取得しています。</p>
                    <p class="text-sm text-gray-500">末尾の <code class="bg-gray-100 px-1 rounded">[]</code>（空の依存配列）は「初回表示のときだけ実行」という意味。これを忘れると無限ループになるので注意。</p>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-blue-700">2. 関数を async に変更</h3>
                    <p class="text-sm text-gray-600 mb-2">各関数に <code class="bg-gray-100 px-1 rounded">async</code> を付け、API呼び出しに <code class="bg-gray-100 px-1 rounded">await</code> を使っています。</p>
                    <div class="grid md:grid-cols-2 gap-3 mt-3">
                        <div class="bg-red-50 p-3 rounded text-xs">
                            <p class="font-bold text-red-600 mb-1">Before（モック版）</p>
                            <code>const addTodo = () => { ... }</code>
                        </div>
                        <div class="bg-green-50 p-3 rounded text-xs">
                            <p class="font-bold text-green-600 mb-1">After（API版）</p>
                            <code>const addTodo = async () => { ... }</code>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-blue-700">3. ローディング状態の追加</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-100 px-1 rounded">loading</code> 状態を追加して、データ取得中は「Loading...」を表示。API通信が完了したら <code class="bg-gray-100 px-1 rounded">setLoading(false)</code> でローディングを終了し、Todoリストを表示します。</p>
                </div>

                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-blue-700">4. toggleTodoの引数追加</h3>
                    <p class="text-sm text-gray-600">モック版では <code class="bg-gray-100 px-1 rounded">toggleTodo(id)</code> だけでしたが、API版では <code class="bg-gray-100 px-1 rounded">toggleTodo(id, completed)</code> と現在のcompletedの値も渡すようにしました。APIに「反転後の値」を送るためです。</p>
                </div>
            </div>
        </section>

        <!-- Step 3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 3: 動作確認</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">両方のサーバーを起動</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm font-bold mb-2 text-green-600">ターミナル1（バックエンド）</p>
                        <div class="code-block p-3 rounded font-mono text-sm">
<pre>cd backend
uvicorn main:app --reload</pre>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-bold mb-2 text-blue-600">ターミナル2（フロントエンド）</p>
                        <div class="code-block p-3 rounded font-mono text-sm">
<pre>cd frontend
npm run dev</pre>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 mt-4">
                    <p class="text-sm"><strong>重要：</strong>バックエンドを<strong>先に</strong>起動してください。フロントエンドが起動時にバックエンドに接続しようとするためです。</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">確認項目チェックリスト</h3>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm">ページを開くとバックエンドのデータが表示される</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm">新しいTodoを追加すると、バックエンドにも保存される</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm">完了状態を切り替えると、バックエンドも更新される</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm">削除すると、バックエンドからも削除される</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <input type="checkbox" class="rounded">
                        <span class="text-sm font-bold text-green-700">ページをリロードしてもデータが残っている！</span>
                    </li>
                </ul>
            </div>

            <div class="bg-green-100 border border-green-300 rounded-lg p-6">
                <h3 class="text-xl font-bold text-green-700 mb-2">Todoアプリ完成！</h3>
                <p class="text-green-600">おめでとうございます！Next.js + FastAPIのフルスタックアプリが完成しました！</p>
            </div>
        </section>

        <!-- トラブルシューティング -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200 text-red-700">よくあるエラーと解決法</h2>

            <div class="space-y-4">
                <div class="bg-white p-5 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">CORSエラー</h3>
                    <p class="text-sm text-gray-600 mb-2">ブラウザのコンソール（F12 → Console）に「Access to fetch ... has been blocked by CORS policy」と表示される</p>
                    <div class="bg-green-50 p-3 rounded">
                        <p class="text-sm"><strong>原因：</strong>バックエンドが、フロントエンドからのアクセスを許可していない。</p>
                        <p class="text-sm mt-1"><strong>解決法：</strong>FastAPIの <code class="bg-gray-100 px-1 rounded">main.py</code> でCORS設定の <code class="bg-gray-100 px-1 rounded">allow_origins</code> に <code class="bg-gray-100 px-1 rounded">"http://localhost:3000"</code> が含まれているか確認。</p>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">Loading... のまま表示されない</h3>
                    <p class="text-sm text-gray-600 mb-2">「Loading...」がずっと表示されたまま</p>
                    <div class="bg-green-50 p-3 rounded">
                        <p class="text-sm"><strong>原因：</strong>バックエンドサーバーが起動していない、またはURLが間違っている。</p>
                        <p class="text-sm mt-1"><strong>解決法：</strong>(1) バックエンドが起動しているか確認 → <a href="http://localhost:8000/docs" class="text-blue-600 hover:underline">http://localhost:8000/docs</a> にアクセス (2) <code class="bg-gray-100 px-1 rounded">api.ts</code> の API_URL が正しいか確認</p>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">追加/更新/削除が反映されない</h3>
                    <p class="text-sm text-gray-600 mb-2">操作してもリストが変わらない</p>
                    <div class="bg-green-50 p-3 rounded">
                        <p class="text-sm"><strong>原因：</strong>APIの戻り値がうまく処理されていない。</p>
                        <p class="text-sm mt-1"><strong>解決法：</strong>(1) 関数に <code class="bg-gray-100 px-1 rounded">async/await</code> が付いているか確認 (2) ブラウザのConsoleでエラーを確認 (3) バックエンドの <code class="bg-gray-100 px-1 rounded">/docs</code> で直接APIをテスト</p>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">422 Unprocessable Entity</h3>
                    <p class="text-sm text-gray-600 mb-2">Consoleに「422」エラーが表示される</p>
                    <div class="bg-green-50 p-3 rounded">
                        <p class="text-sm"><strong>原因：</strong>フロントエンドが送るデータの形式とバックエンドが期待する形式が一致していない。</p>
                        <p class="text-sm mt-1"><strong>解決法：</strong>(1) <code class="bg-gray-100 px-1 rounded">Content-Type: application/json</code> ヘッダーがあるか確認 (2) JSON.stringifyで送るデータの構造がPydanticモデルと一致しているか確認</p>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-6">
                <h3 class="font-bold mb-2">デバッグのコツ</h3>
                <p class="text-sm text-gray-600 mb-2">ブラウザのDevTools（F12キー）を活用しましょう：</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><strong>Console タブ：</strong>JavaScriptのエラーメッセージを確認</li>
                    <li><strong>Network タブ：</strong>API通信の詳細（リクエスト内容、レスポンス、ステータスコード）を確認</li>
                </ul>
            </div>
        </section>

        <!-- 第3部完了 -->
        <div class="bg-purple-100 border border-purple-300 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-purple-700 mb-2">第3部完了！</h3>
            <p class="text-purple-600 mb-3">チュートリアルお疲れさまでした！Next.js + FastAPIでフルスタックアプリを作る流れを体験できました。</p>
            <div class="text-sm text-purple-600">
                <p class="font-bold mb-1">習得したスキル：</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>TypeScriptで型定義を作成する</li>
                    <li>Reactのコンポーネントを組み立てる</li>
                    <li>useState / useEffect で状態管理をする</li>
                    <li>fetch API でバックエンドと通信する</li>
                    <li>フロントエンドとバックエンドを連携させる</li>
                </ul>
            </div>
        </div>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="tutorial-todo-frontend.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：フロントエンド編
            </a>
            <a href="errors.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：よくあるエラー集
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
