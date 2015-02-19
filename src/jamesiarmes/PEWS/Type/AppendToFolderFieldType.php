<?php
/**
 * Contains \jamesiarmes\PEWS\Type\AppendToFolderFieldType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * This type element is not implemented. Any request that uses this type will
 * always return an error response.
 *
 * @package php-ews\Types
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a search folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\TasksFolderType
     */
    public $TasksFolder;
}