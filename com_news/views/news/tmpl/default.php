<?php

defined('_JEXEC') or exit();




?>
<form action="index.php?option=com_news&veiw=news" method='POST' id="adminForm" name="adminForm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%"><?php echo JText::_('COM_NEWS_NUM')?></th>
                <th width="2%"><?php echo JHtml::_('grid.checkall')?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_TITLE')?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_STATE') ?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_ID')?></th>
            </tr>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($this->items)):?>

                <?php foreach($this->items as $i=>$row):?>
                    <?php $link = 'index.php?option=com_news&task=item&edit&id='.$row->id;?>
                    <tr> 
                        <td><?php echo $this->pagination->getRowOffset($i)?></td>
                        <td><?php echo JHtml::_('grid.id', $i, $row->id);?></td>
                        <td><a href='<?php echo $link ?>'><?php echo $row->title ?> </a></td>
                        <td><?php echo JHtml::_('jgrid.published', $row->published, $i, 'news.', true);?></td>
                        <td text-align='center'><?php echo $row->id ?></td>
                    </tr>

                <?php endforeach;?>
            <?php endif;?>
        </tbody>
        <tfoot>
            <tr>
                <td collspan='5'></td>
            </tr>
        </tfoot>
        
        
    </table>
    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="boxchecked" value="0"/>
    <?php echo JHtml::_('form.token')?>
</form>
