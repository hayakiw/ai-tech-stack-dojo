<div class="bg-white border-b">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between text-sm">
            <span class="text-cyan-600 font-medium"><?php echo htmlspecialchars($section_name); ?></span>
            <span class="text-gray-500">Step <?php echo $step_number; ?> / <?php echo $total_steps; ?></span>
        </div>
        <div class="mt-2 h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-full bg-cyan-500 rounded-full transition-all duration-300" style="width: <?php echo ($step_number / $total_steps) * 100; ?>%"></div>
        </div>
    </div>
</div>
