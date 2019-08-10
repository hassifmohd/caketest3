<?php
// dump($articles->toArray());
	foreach ($articles as $article) {
		$content = $this->Html->link($article->title, ['action' => 'view', $article->id]);
		// $this->Calendar->addRow($article->date_event_start, $content, ['class' => 'event']);
		$this->Calendar->addRowFromTo($article->date_event_start, $article->date_event_end, $content, ['class' => 'event']);
	}

	echo $this->Calendar->render();
?>

<?php if (!$this->Calendar->isCurrentMonth()) { ?>
	<?php echo $this->Html->link(__('Jump to the current month') . '...', ['action' => 'index'])?>
<?php } ?>