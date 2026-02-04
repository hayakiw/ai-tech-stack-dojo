<?php
$page_title = 'Todoアプリ - 連携編 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'tutorial';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
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

            <div class="bg-white p-6 rounded-lg shadow">
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
        </section>

        <!-- Step 1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 1: API通信関数を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
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

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">完成コード例: src/lib/api.ts</h3>
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
        </section>

        <!-- Step 2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 2: ページをAPI連携に変更</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
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

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">主要な変更点</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">"use client"</span>;

<span class="text-purple-400">import</span> { useState, useEffect } <span class="text-purple-400">from</span> <span class="text-green-400">"react"</span>;
<span class="text-purple-400">import</span> { Todo } <span class="text-purple-400">from</span> <span class="text-green-400">"@/types/todo"</span>;
<span class="text-purple-400">import</span> * <span class="text-purple-400">as</span> api <span class="text-purple-400">from</span> <span class="text-green-400">"@/lib/api"</span>;

<span class="text-purple-400">export default function</span> <span class="text-blue-400">Home</span>() {
  <span class="text-purple-400">const</span> [todos, setTodos] = useState&lt;Todo[]&gt;([]);
  <span class="text-purple-400">const</span> [newTitle, setNewTitle] = useState(<span class="text-green-400">""</span>);
  <span class="text-purple-400">const</span> [loading, setLoading] = useState(<span class="text-purple-400">true</span>);

  <span class="text-gray-400">// 初回読み込み</span>
  useEffect(() => {
    api.fetchTodos().then((data) => {
      setTodos(data);
      setLoading(<span class="text-purple-400">false</span>);
    });
  }, []);

  <span class="text-gray-400">// Todo追加</span>
  <span class="text-purple-400">const</span> addTodo = <span class="text-purple-400">async</span> () => {
    <span class="text-purple-400">if</span> (!newTitle.trim()) <span class="text-purple-400">return</span>;
    <span class="text-purple-400">const</span> newTodo = <span class="text-purple-400">await</span> api.createTodo(newTitle);
    setTodos([...todos, newTodo]);
    setNewTitle(<span class="text-green-400">""</span>);
  };

  <span class="text-gray-400">// 完了切り替え</span>
  <span class="text-purple-400">const</span> toggleTodo = <span class="text-purple-400">async</span> (id: <span class="text-blue-400">number</span>, completed: <span class="text-blue-400">boolean</span>) => {
    <span class="text-purple-400">const</span> updated = <span class="text-purple-400">await</span> api.updateTodo(id, { completed: !completed });
    setTodos(todos.map(t => t.id === id ? updated : t));
  };

  <span class="text-gray-400">// 削除</span>
  <span class="text-purple-400">const</span> handleDelete = <span class="text-purple-400">async</span> (id: <span class="text-blue-400">number</span>) => {
    <span class="text-purple-400">await</span> api.deleteTodo(id);
    setTodos(todos.filter(t => t.id !== id));
  };

  <span class="text-purple-400">if</span> (loading) <span class="text-purple-400">return</span> <span class="text-cyan-400">&lt;div&gt;</span>Loading...<span class="text-cyan-400">&lt;/div&gt;</span>;

  <span class="text-gray-400">// ... 以下、表示部分は同じ</span>
}</pre>
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
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">確認項目</h3>
                <ul class="list-disc list-inside space-y-2">
                    <li>ページを開くとバックエンドのデータが表示される</li>
                    <li>新しいTodoを追加すると、バックエンドにも保存される</li>
                    <li>完了状態を切り替えると、バックエンドも更新される</li>
                    <li>削除すると、バックエンドからも削除される</li>
                    <li><strong>ページをリロードしてもデータが残っている！</strong></li>
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
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">CORSエラー</h3>
                    <p class="text-sm text-gray-600 mb-2">ブラウザのコンソールに「CORS」と表示される</p>
                    <p class="text-sm"><strong>解決法：</strong>FastAPIのCORS設定で<code class="bg-gray-200 px-1 rounded">http://localhost:3000</code>を許可しているか確認</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">データが表示されない</h3>
                    <p class="text-sm text-gray-600 mb-2">Loading...のまま、またはエラー</p>
                    <p class="text-sm"><strong>解決法：</strong>バックエンドサーバーが起動しているか確認。<code class="bg-gray-200 px-1 rounded">http://localhost:8000/docs</code>にアクセスできるか確認</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">追加/更新/削除が反映されない</h3>
                    <p class="text-sm text-gray-600 mb-2">操作してもリストが変わらない</p>
                    <p class="text-sm"><strong>解決法：</strong>API関数でawaitを忘れていないか確認。ブラウザのコンソールでエラーを確認</p>
                </div>
            </div>
        </section>

        <!-- 第3部完了 -->
        <div class="bg-purple-100 border border-purple-300 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-purple-700 mb-2">第3部完了！</h3>
            <p class="text-purple-600">チュートリアルお疲れさまでした！Next.js + FastAPIでフルスタックアプリを作る流れを体験できました。</p>
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
