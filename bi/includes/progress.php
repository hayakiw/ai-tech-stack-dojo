<?php
$section_name = $section_name ?? '';
$step_number = $step_number ?? 0;
$total_steps = $total_steps ?? 14;
$progress_percent = ($step_number / $total_steps) * 100;
?>
    <!-- 進捗バー -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600"><?php echo htmlspecialchars($section_name); ?></span>
                <span class="text-gray-600"><?php echo $step_number; ?> / <?php echo $total_steps; ?></span>
            </div>
            <div class="mt-2 h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full bg-emerald-500 rounded-full transition-all duration-300" style="width: <?php echo $progress_percent; ?>%"></div>
            </div>
        </div>
    </div>
